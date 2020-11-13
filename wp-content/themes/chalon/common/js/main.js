$(function () {
  // ナビ
  $(".menu_btn").on("click", function () {
    $(".sp_nav").toggleClass("on");
  });

  //トップへ戻る
  $('.to_top').on('click', function () {
    $('body,html').animate({ scrollTop: 0 }, 500);
  })

  //
  $('.to_top').hide();
  $(window).on('scroll', function () {
    var topHeight = $(window).scrollTop();
    if (topHeight > 500) {
      $('.to_top').fadeIn();
    } else {
      $('.to_top').fadeOut();
    }
  });

  //メニューページ、タブ
  $(".tab_contents").hide();
  $(".menu main ul li:first-child a").addClass("checked");
  $("#thisMonth").show();
  $(".menu main ul li a").on("click", function () {
    $(".menu main ul li a").removeClass("checked");
    $(".tab_contents").hide();
    $(this).addClass("checked");
    var target = $(this).attr("href");
    $(target).fadeIn();
    return false;
  })

  //カレンダー
  let week = ['日', '月', '火', '水', '木', '金', '土'];
  let html = '';
  let date = new Date();
  let year = date.getFullYear();
  let month = date.getMonth() + 1;
  let start = new Date(year, month - 1, 1);//月の最初の日（1日）を取得
  let startDay = start.getDay();
  let end = new Date(year, month, 0); // 月の最後の日を取得
  let endDate = end.getDate();
  let dateCount = 1;

  html += '<ul>';
  for (let i = 0; i < week.length; i++) {
    html += '<li class="day">';
    html += week[i];
    html += '</li>';
  }

  //空のliを月頭に追加
  //その月の1日の曜日分だけ空li
  for (let i = 0; i < startDay; i++) {
    html += '<li class="empty"></li>';
  }

  for (let i = 0; i < endDate; i++) {
    html += '<li>';
    html += dateCount;
    html += '</li>';
    dateCount++;
  }

  //空のliを月末に追加
  //その月の曜日分とその月の日数を足す
  //7で割った時の余りを出す
  //7からその数字を引いた文だけ空li
  let endLi = (7 - ((startDay + endDate) % 7)) % 7;

  for (let i = 0; i < endLi; i++) {
    html += '<li class="empty"></li>';
  }
  html += '</ul>';
  //33
  $('.cal_area').html(html);





});//////////////////