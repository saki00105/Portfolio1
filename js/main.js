// //ローディング画面
// const loading = document.querySelector('.l-loader');

// window.addEventListener ('load', () => {
//     loading.classList.add('l-loaded','p-loaded');
// });
// console.log();

// // //gsapアニメーション
// const penguin = document.querySelector('.p-header__img');
// gsap.to(penguin, {
//   duration: 4.5,
//   ease: "elastic.out(1, 0.3)",
//   y: -250,
//   opacity: 1
// });

// const loading = document.querySelector('.l-loader');
// const penguin = document.querySelector('.p-header__img');

// // アニメーションを開始する関数
// function startAnimation() {
//   gsap.to(penguin, {
//     duration: 4.5,
//     ease: "elastic.out(1, 0.3)",
//     y: -250,
//     opacity: 1
//   });
// }

// // ウィンドウのloadイベントのリスナー
// window.addEventListener('load', () => {
//   // ローディングが完了したらクラスを追加
//   loading.classList.add('l-loaded', 'p-loaded');
//   // ローディングが完了した後にアニメーションを開始する関数を呼び出す
//   startAnimation();
// });


const loading = document.querySelector('.l-loader');
const penguin = document.querySelector('.p-header__img');
const header = document.querySelector('.p-header');

// アニメーションを開始する関数
function startAnimation() {
  const tl = gsap.timeline();

  // .p-header__imgのアニメーション
  tl.to(penguin, {
    duration: 4.5,
    ease: "elastic.out(1, 0.3)",
    y: -250,
    opacity: 1
  });

  // .p-headerのアニメーション
  tl.to(header, {
    duration: 1,
    opacity: 1,
    // transform: 'translateY(2)',
    // y: -250,
    ease: 'ease-out',
  }, '-=4'); // -=2 は、前のアニメーションが2秒かかるため、それよりも2秒早く開始することを指定しています。
}

// ウィンドウのloadイベントのリスナー
window.addEventListener('load', () => {
  // ローディングが完了したらクラスを追加
  loading.classList.add('l-loaded', 'p-loaded');
  // ローディングが完了した後にアニメーションを開始する関数を呼び出す
  startAnimation();
});




//shape
function PageTopAnime() {
  var scroll = window.scrollY || document.documentElement.scrollTop;
  var pageTop = document.querySelectorAll('.c-appear');

  pageTop.forEach(function(pageTop){
    if (scroll >= 550) {
      // 上から200pxスクロールしたら
      pageTop.classList.remove('DownMove');
      pageTop.classList.add('UpMove');
    } else {
      if (pageTop.classList.contains('UpMove')) {
        // すでにUpMoveというクラス名がついていたら
        pageTop.classList.remove('UpMove');
        pageTop.classList.add('DownMove');
      }
    }
  });

 
}

// 画面をスクロールしたら動かす
window.addEventListener('scroll', function () {
  PageTopAnime();
});

// // ページが読み込まれたらすぐに動かす
// window.addEventListener('load', function () {
//   PageTopAnime();
// });

// .page-topをクリックした際の設定
// document.querySelector('.page-top a').addEventListener('click', function (event) {
//   event.preventDefault(); // リンク自体の無効化

  // ページトップまでスクロール
  // window.scrollTo({
  //   top: 0,
  //   behavior: 'smooth' // ページトップスクロールのアニメーション
  // });
// });



//スクロールしたら表示
// document.addEventListener('DOMContentLoaded', function() {
//   ScrollReveal({ reset: false, distance:'2rem', duration: 2000 , viewFactor: 0 , threshold: 0.01});
  
//   ScrollReveal().reveal("h1", { 
//     origin:'bottom' 
//   });
//   ScrollReveal().reveal("h2, .p-single__title", { 
//     delay: 100 , 
//     origin:'bottom' 
//   });
//   ScrollReveal().reveal(".c-fw-500", { 
//     delay: 300 , 
//     origin:'bottom' 
//   });
//   ScrollReveal().reveal(".p-skills__left, .p-skills__right, .p-skills__gallery-img , .p-works__card ", {
//     delay: 300 ,
//     origin:'bottom',
//     interval:200
//   });
//   ScrollReveal().reveal(".snow-monkey-form", { 
//     delay: 400 , 
//     origin:'bottom' 
//   });  
// });


document.addEventListener('DOMContentLoaded', function() {
  ScrollReveal({ reset: false, distance: '2rem', duration: 2000, viewFactor: 0, threshold: 0.01 });
  ScrollReveal().reveal("h2, .p-single__title", { origin: 'bottom' });
  ScrollReveal().reveal(".c-fw-500", { delay: 100, origin: 'bottom' });
  ScrollReveal().reveal(".p-skills__left, .p-skills__right, .p-skills__gallery-img , .p-works__card ", {
    delay: 300,
    origin: 'bottom',
    interval: 200
  });
  ScrollReveal().reveal(".snow-monkey-form", { delay: 400, origin: 'bottom' });
});


console.log('テスト');


// //氷の表示
const options = {
  threshold: 0.3  // 30%以上が表示されたらコールバックを実行
};

const observer = new IntersectionObserver((entries, observer) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      // 要素が表示されたらアニメーションを再生
      if (entry.target.classList.contains('p-skills__center') || entry.target.classList.contains('p-contact__center')) {
        playAnimation(entry.target);
      }

      observer.unobserve(entry.target); // 一度だけ実行するためObserverを解除
    }
  });
}, options);

const playAnimation = (element) => {
  const animation = gsap.to(element, {
    duration: 4.5,
    ease: "elastic.out(1, 0.3)",
    y: -250,
    opacity: 1,
    paused: true  // 最初はアニメーションを一時停止
  });

  animation.play();
};

const frozenCenter = document.querySelector('.p-skills__center');
const frozenContactCenter = document.querySelector('.p-contact__center');

console.log('frozenCenter:', frozenCenter);
console.log('frozenContactCenter:', frozenContactCenter);

// 監視対象の要素をObserverに追加
observer.observe(frozenCenter);
observer.observe(frozenContactCenter);


//ハンバーガーメニュー
document.addEventListener('DOMContentLoaded', function () {
  const hamburger = document.querySelector('.c-hamburger');
 
  // 追記
  const headNav = document.querySelector('#js-nav');// #js-nav要素取得して変数に格納

  hamburger.addEventListener('click', () => {
    if (hamburger.classList.contains("is-active")) {
      hamburger.classList.remove('is-active');
      hamburger.querySelector('.c-hamburger__text').textContent = 'MENU';


      // 追記
      headNav.classList.remove('is-active')


    } else {
      hamburger.classList.add('is-active');
      hamburger.querySelector('.c-hamburger__text').textContent = 'CLOSE';
     
      // 追記
      headNav.classList.add('is-active')
    }
  });

});
