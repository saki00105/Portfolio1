//ローディング画面
const loading = document.querySelector('.l-loader');

window.addEventListener ('load', () => {
    loading.classList.add('l-loaded','p-loaded');
});


//スクロールしたら表示
//クラス名が「scroll-in」の要素を取得
const objects = document.querySelectorAll('.scroll-in');

//スクロール感知で実行
const cb = function(entries, observer) {
    entries.forEach(entry => {
        if(entry.isIntersecting) {
            entry.target.classList.add('animate__animated animate__fadeInUp');//スクロール感知で「displayed」のクラス名を付与
            observer.unobserve(entry.target); //監視の終了
        }
    });
}
// オプション
const options = {
    root: null,
    rootMargin: "0px",
    threshold: 0
}

// IntersectionObserverインスタンス化
const io = new IntersectionObserver(cb, options);

// 監視を開始
objects.forEach(object => {
    io.observe(object);
});


/*
スクロールで要素を表示
================================================ */
// 監視対象が範囲内に現れたら実行する動作
const animateFade = (entries, obs) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.animate(
          {
            opacity: [0, 1],
            filter: ['blur(.4rem)', 'blur(0)'], 
            translate: ['0 4rem', 0],
          },
          {
            duration: 2000,
            easing: 'ease',
            fill: 'forwards',
          }
        );
        // 一度ふわっと表示されたら監視をやめる
        obs.unobserve(entry.target);
      }
    });
  };
  
  // 監視設定
  const fadeObserver = new IntersectionObserver(animateFade);
  
  // .fadeinを監視するよう指示
  const fadeElements = document.querySelectorAll('.fadein');
  fadeElements.forEach((fadeElement) => {
    fadeObserver.observe(fadeElement);
  });