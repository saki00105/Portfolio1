// var selector = '.p-header-title'; // 注1: タイトルのタグに使われている"CSSセレクタ"
// var title = jQuery(selector).html();
// var pos = 4; // 注2: 何文字目で改行するか？
// jQuery(selector).html(title.slice(0, pos) + '<br>' + title.slice(pos));

var selector = 'p-header__title';
var element = document.querySelector(selector);
var title = element.innerHTML;
var pos = 4;
element.innerHTML = title.slice(0, pos) + '<br>' + title.slice(pos);
