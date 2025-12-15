function markFirstInRow() {
  const items = document.querySelectorAll('.c-service-category__list');
  let prevTop = null;

  items.forEach((item, index) => {
    item.classList.remove('is-first-in-row'); // 既存のクラスを削除
    const top = item.getBoundingClientRect().top;

    if (top !== prevTop) {
      item.classList.add('is-first-in-row');
      prevTop = top;
    }
  });
}

// ページ読み込みとリサイズ時に実行
window.addEventListener('DOMContentLoaded', markFirstInRow);
window.addEventListener('resize', markFirstInRow);
