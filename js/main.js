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


// const header = document.querySelector('.p-header__layer');
// gsap.to(header, {
//   duration:3,
//   ease: "power4.out",
//   y: 250
// });





//スクロールしたら表示
document.addEventListener('DOMContentLoaded', function() {
  threshold: 0.1,
  ScrollReveal({ reset: false, distance:'2rem', duration: 2000 , viewFactor: 0.1,});
  ScrollReveal().reveal("h2", { 
    delay: 200 , 
    origin:'bottom' 
  });
  ScrollReveal().reveal("p , .p-footer", { 
    delay: 600 , 
    origin:'bottom' 
  });
  ScrollReveal().reveal(".l-shape ", { 
    delay: 1000 , 
    origin:'bottom', 
  });

  ScrollReveal().reveal(".p-skills__gallery-img , .linkcard ", {
    delay: 1000 ,
    origin:'bottom',
    interval:200
  });

});
// ScrollReveal().reveal('.punchline', { delay: 2000 });
console.log('テスト');


const sectionObserver = new IntersectionObserver(revealSection, {
  root: null,
  threshold: 0.1, //10%
});
console.log('テスト2');

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
