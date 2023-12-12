//ローディング画面
const loading = document.querySelector('.l-loader');

window.addEventListener ('load', () => {
    loading.classList.add('l-loaded','p-loaded');
});
console.log();

//gsapアニメーション

const penguin = document.querySelector('.p-header__img');
gsap.to(penguin, {
  duration: 4.5,
  ease: "elastic.out(1, 0.3)",
  y: -250,
  opacity: 1

});

document.addEventListener('DOMContentLoaded', function() {
  ScrollReveal({ reset: false, distance:'2rem', duration: 2000 , viewFactor: 0.01 , threshold: 0.01});
  
  ScrollReveal().reveal("h1", { 
    delay: 200 , 
    origin:'bottom' 
  });
});






//スクロールしたら表示
document.addEventListener('DOMContentLoaded', function() {
  ScrollReveal({ reset: false, distance:'2rem', duration: 2000 , viewFactor: 0.01 , threshold: 0.01});
  
  ScrollReveal().reveal("h2", { 
    delay: 100 , 
    origin:'bottom' 
  });

  ScrollReveal().reveal(".c-fw-500", { 
    delay: 600 , 
    origin:'bottom' 
  });
  
  ScrollReveal().reveal(".l-shape , .snow-monkey-form ", { 
    delay: 1000 , 
    origin:'bottom', 
  });

  ScrollReveal().reveal(".p-skills__gallery-img , .linkcard ", {
    delay: 600 ,
    origin:'bottom',
    interval:200
  });

});
// ScrollReveal().reveal('.punchline', { delay: 2000 });
console.log('テスト');


//氷の表示
const frozenCenter = document.querySelector('.p-skills__center');
const frozenSide = document.querySelector('.p-skills__left , .p-skills__right');


// アニメーションの設定
const frozenCenterAnimation = gsap.to( frozenCenter, {
  duration: 4.5,
  ease: "elastic.out(1, 0.3)",
  y: -250,
  opacity: 1,
  paused: true  // 最初はアニメーションを一時停止
});
const frozenSideAnimation = gsap.to( frozenSide, {
  duration: 4.5,
  ease: "elastic.out(1, 0.3)",
  y: -250,
  opacity: 1,
  paused: true,  // 最初はアニメーションを一時停止
  delay: 0.5 
});

// Intersection Observerの設定
const options = {
  threshold: 0.5  // 50%以上が表示されたらコールバックを実行
};

const observer = new IntersectionObserver((entries, observer) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      // 要素が表示されたらアニメーションを再生
      if (entry.target.classList.contains('p-skills__center')) {
        frozenCenterAnimation.play();
      } else if (entry.target.classList.contains('p-skills__left , p-skills__right')) {
        frozenSideAnimation.play();
      }

      observer.unobserve(entry.target); // 一度だけ実行するためObserverを解除
    }
  });
}, options);

// 監視対象の要素をObserverに追加
observer.observe(frozenCenter);
observer.observe(frozenSide);





const aliceTumbling = [
  { transform: 'rotate(0) scale(1)' },
  { transform: 'rotate(360deg) scale(0)' }
];

const aliceTiming = {
  duration: 2000,
  iterations: 1,
  fill: 'forwards'
}

const alice1 = document.querySelector("#alice1");
const alice2 = document.querySelector("#alice2");
const alice3 = document.querySelector("#alice3");


alice1.animate(aliceTumbling, aliceTiming).finished
  .then(() => alice2.animate(aliceTumbling, aliceTiming).finished)
  .then(() => alice3.animate(aliceTumbling, aliceTiming).finished)
  .catch(error => console.error(`Error animating Alices: ${error}`
));


// const sectionObserver = new IntersectionObserver(revealSection, {
//   root: null,
//   threshold: 0.1, //10%
// });
// console.log('テスト2');

//クラス名が「scroll-in」の要素を取得
// const objects = document.querySelectorAll('.scroll-in');

// //スクロール感知で実行
// const cb = function(entries, observer) {
//     entries.forEach(entry => {
//         if(entry.isIntersecting) {
//             entry.target.classList.add('animate__animated animate__fadeInUp');//スクロール感知で「displayed」のクラス名を付与
//             observer.unobserve(entry.target); //監視の終了
//         }
//     });
// }
// // オプション
// const options = {
//     root: null,
//     rootMargin: "0px",
//     threshold: 0
// }

// // IntersectionObserverインスタンス化
// const io = new IntersectionObserver(cb, options);

// // 監視を開始
// objects.forEach(object => {
//     io.observe(object);
// });


// /*
// スクロールで要素を表示
// ================================================ */
// // 監視対象が範囲内に現れたら実行する動作
// const animateFade = (entries, obs) => {
//     entries.forEach((entry) => {
//       if (entry.isIntersecting) {
//         entry.target.animate(
//           {
//             opacity: [0, 1],
//             filter: ['blur(.4rem)', 'blur(0)'], 
//             translate: ['0 4rem', 0],
//           },
//           {
//             duration: 2000,
//             easing: 'ease',
//             fill: 'forwards',
//           }
//         );
//         // 一度ふわっと表示されたら監視をやめる
//         obs.unobserve(entry.target);
//       }
//     });
//   };
  
//   // 監視設定
//   const fadeObserver = new IntersectionObserver(animateFade);
  
//   // .fadeinを監視するよう指示
//   const fadeElements = document.querySelectorAll('.fadein');
//   fadeElements.forEach((fadeElement) => {
//     fadeObserver.observe(fadeElement);
//   });
