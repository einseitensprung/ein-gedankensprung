(function () {
  var root = document.getElementById('heroSlider');
  if (!root) return;

  var slides = Array.prototype.slice.call(root.querySelectorAll('.slide'));
  var dots = Array.prototype.slice.call(root.querySelectorAll('.dot'));
  var prevBtn = root.querySelector('.slider-arrow.prev');
  var nextBtn = root.querySelector('.slider-arrow.next');
  var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var current = slides.findIndex(function (s) { return s.classList.contains('is-active'); });
  if (current < 0) current = 0;
  var timer = null;
  var AUTOPLAY_MS = 6500;

  var revealPath = document.getElementById('heroArcRevealPath');
  var revealLen = revealPath ? revealPath.getTotalLength() : 0;
  if (revealPath) {
    revealPath.style.strokeDasharray = revealLen;
    revealPath.style.strokeDashoffset = reduceMotion ? 0 : revealLen;
  }

  function playArcDraw() {
    if (!revealPath) return;
    if (reduceMotion) { revealPath.style.strokeDashoffset = 0; return; }
    revealPath.getAnimations().forEach(function (a) { a.cancel(); });
    revealPath.animate(
      [{ strokeDashoffset: revealLen }, { strokeDashoffset: 0 }],
      { duration: 1500, delay: 150, easing: 'cubic-bezier(.65,0,.35,1)', fill: 'forwards' }
    );
  }

  function goTo(index) {
    var next = ((index % slides.length) + slides.length) % slides.length;
    if (next === current) return;
    slides[current].classList.remove('is-active');
    dots[current].classList.remove('is-active');
    dots[current].setAttribute('aria-selected', 'false');
    current = next;
    slides[current].classList.add('is-active');
    dots[current].classList.add('is-active');
    dots[current].setAttribute('aria-selected', 'true');
    playArcDraw();
  }

  function stop() {
    if (timer) { clearInterval(timer); timer = null; }
  }

  function start() {
    if (reduceMotion || timer) return;
    timer = setInterval(function () { goTo(current + 1); }, AUTOPLAY_MS);
  }

  dots.forEach(function (dot, i) {
    dot.addEventListener('click', function () { goTo(i); stop(); start(); });
  });
  if (prevBtn) prevBtn.addEventListener('click', function () { goTo(current - 1); stop(); start(); });
  if (nextBtn) nextBtn.addEventListener('click', function () { goTo(current + 1); stop(); start(); });

  root.addEventListener('mouseenter', stop);
  root.addEventListener('mouseleave', start);
  root.addEventListener('focusin', stop);
  root.addEventListener('focusout', function (e) {
    if (!root.contains(e.relatedTarget)) start();
  });
  root.addEventListener('keydown', function (e) {
    if (e.key === 'ArrowLeft') { goTo(current - 1); stop(); start(); }
    if (e.key === 'ArrowRight') { goTo(current + 1); stop(); start(); }
  });

  var slidesEl = root.querySelector('.slides');
  var dragging = false;
  var dragStartX = 0;
  var dragStartY = 0;
  var dragDeltaX = 0;
  var SWIPE_THRESHOLD = 40;

  function onDragStart(e) {
    if (e.pointerType === 'mouse' && e.button !== 0) return;
    dragging = true;
    dragStartX = e.clientX;
    dragStartY = e.clientY;
    dragDeltaX = 0;
    stop();
    if (slidesEl.setPointerCapture) slidesEl.setPointerCapture(e.pointerId);
  }
  function onDragMove(e) {
    if (!dragging) return;
    dragDeltaX = e.clientX - dragStartX;
  }
  function onDragEnd(e) {
    if (!dragging) return;
    dragging = false;
    var deltaY = e.clientY - dragStartY;
    if (Math.abs(dragDeltaX) > SWIPE_THRESHOLD && Math.abs(dragDeltaX) > Math.abs(deltaY)) {
      goTo(dragDeltaX < 0 ? current + 1 : current - 1);
    }
    start();
  }
  slidesEl.addEventListener('pointerdown', onDragStart);
  slidesEl.addEventListener('pointermove', onDragMove);
  slidesEl.addEventListener('pointerup', onDragEnd);
  slidesEl.addEventListener('pointercancel', onDragEnd);

  playArcDraw();
  start();
})();

(function () {
  var toggle = document.getElementById('navToggle');
  var links = document.getElementById('navLinks');
  if (!toggle || !links) return;

  function closeMenu() {
    toggle.setAttribute('aria-expanded', 'false');
    links.classList.remove('is-open');
  }
  function openMenu() {
    toggle.setAttribute('aria-expanded', 'true');
    links.classList.add('is-open');
  }

  toggle.addEventListener('click', function () {
    if (toggle.getAttribute('aria-expanded') === 'true') closeMenu(); else openMenu();
  });
  links.addEventListener('click', function (e) {
    if (e.target.tagName === 'A') closeMenu();
  });
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') closeMenu();
  });
  window.addEventListener('resize', function () {
    if (window.innerWidth > 640) closeMenu();
  });
})();

(function () {
  var openers = document.querySelectorAll('[data-open-dialog]');
  var dialogs = document.querySelectorAll('.legal-dialog');

  openers.forEach(function (btn) {
    btn.addEventListener('click', function () {
      var dialog = document.getElementById(btn.getAttribute('data-open-dialog'));
      if (dialog) dialog.showModal();
    });
  });

  dialogs.forEach(function (dialog) {
    dialog.querySelectorAll('[data-close-dialog]').forEach(function (btn) {
      btn.addEventListener('click', function () { dialog.close(); });
    });
    dialog.addEventListener('click', function (e) {
      if (e.target === dialog) dialog.close();
    });
  });
})();