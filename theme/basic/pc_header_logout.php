  <!-- css리셋 -->
  <link rel="stylesheet" href="../../css/reset.css" type="text/css">

  <!-- 접두사 스크립트 -->
  <script src="../../js/prefixfree.min.js"></script>

  <!-- 아이콘 폰트 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" integrity="sha512-aOG0c6nPNzGk+5zjwyJaoRUgCdOrfSDhmMID2u4+OIslr0GjpLKo7Xm0Ao3xmpM4T8AmIouRkqwj1nrdVsLKEQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@400;500;700;900&display=swap');

    a{
      color:#333;
      text-decoration: none;
    }
    header{
      width:100%;
      font-family: 'Noto Sans KR', sans-serif;
    }
    header > .header_top{
      border-bottom:1px solid #E9E9E9;
    }
    .header_inner{
      display:flex;
      justify-content: space-between;
      margin:0px auto;
      width:1200px;
      position: relative;
    }
    .header_inner > .inner_left{
      display:flex;
    }
    .inner_left > li{
      border-right: 1px solid #E9E9E9;
      padding: 0px 11px;
      line-height:42px;
      height:42px;
    }
    .inner_left > li > a{
      letter-spacing: -0.04em;
      font-size:14px;
    }
    .inner_left > li:last-child{
      border:none;
    }
    .inner_left > li:first-child > a{
      color: #444444;
    }
    .inner_left > li:first-child > a > i.fas{
      font-size:13px;
      padding-left: 6px;
    }

    .inner_left > li:last-child > a{
      color:#fff;
      background: #3A66FF;
      border-radius: 31px;
      padding:4px 4px 4px 14px;
      height: 27px;
      line-height: 27px;
    }
    .inner_left > li:last-child > a > i.fas{
      background-color: #fff;
      display:inline-block;
      border-radius: 50%;
      width:19px;
      height: 19px;
      color:#555555;
      text-align: center;
      line-height: 19px;
      font-size:10px;
      transform: translateY(-2px);
      margin-left:8px;
    }

    .header_inner > .inner_right{
      display:flex;
    }
    .inner_right > li{
      height: 42px;
      line-height: 42px;
      padding: 0px 11px;
    }
    .inner_right > li > a{
      font-size:14px;
      letter-spacing: -0.04em;
      position: relative;
    }
    .inner_right > li:first-child > a::before{
      content: "";
      display:inline-block;
      width:1px;
      height: 10px;
      position: absolute;
      top:50%;
      transform: translateY(-50%);
      right:-12px;
      background-color: #E9E9E9;
    }
    .inner_right > li:first-child > a, .inner_right > li:nth-child(2) > a{
      color: #444444;
    }
    .inner_right > li:nth-child(2) > a{
      font-weight: bold;
      position: relative;
    }
    .inner_right > li:nth-child(2) > a::before{
      content: "";
      width: 0px;
      height: 0px;
      border-bottom: 6px solid #FD2F17;
      border-left: 3px solid transparent;
      border-right: 3px solid transparent;
      position: absolute;
      bottom: -5px;
      left:50%;
      transform: translateX(-50%);
    }
    .inner_right > li:nth-child(2) > a::after{
      content: "100%혜택받기";
      letter-spacing: -0.04em;
      color: #FFFFFF;
      font-size:10px;
      display: inline-block;
      background: #FD2F17;
      color:#fff;
      line-height: 15px;
      text-align: center;
      font-weight: normal;
      width: 71px;
      height: 15px;
      border-radius: 4px;
      position: absolute;
      right:50%;
      transform: translateX(50%);
      bottom:-20px;
    }
    .inner_right > li:last-child{
      padding:8px 11px;
      height: 42px;
      box-sizing: border-box;
      position: relative;
    }
    .inner_right > li:last-child > .search_img{
      display: inline-block;
      width:51px;
      height: 25px;
      border: 1px solid #D2D6DB;
      border-radius: 12.5px;
      display:flex;
      justify-content: center;
      line-height: 42px;
      background:url('./img/pc_header_search.svg') no-repeat left 3px center;
      background-size: 39%;
      font-size:12px;
      text-align: center;
      color: #5A5A6F;
      font-weight: 600;
      line-height: 21px;
      font-weight: normal;
      text-indent: 10px;
      cursor: pointer;
    }
    .inner_right > li:last-child > .search_ch{
      display:none;
    }
    .search_btn > input[type="checkbox"]:checked + label.search_img{
      background:url('./img/pc_header_close.svg') no-repeat left 8px center;
      background-size: 20%;
    }
    /* .inner_right > li:last-child > .search_img > img{
      width: 18px;
      height: 18px;
      padding:4px 0px 5px;
    } */
    /* .inner_right > li:last-child > .search_img > span{
      font-size:12px;
      text-align: center;
      color: #5A5A6F;
      font-weight: 600;
      line-height: 21px;
      font-weight: normal;
      text-indent: 10px;
    } */
    .search_box{
      width: 354px;
      /* height: 146px; */
      background: #FFFFFF;
      border: 1px solid #E9E9E9;
      position: absolute;
      z-index: 9999;
      top: 42px;
      right: 0px;
      padding: 20px 22px 25px;
      box-sizing: border-box;
      display:none;
    }
    .search_box > input[type="search"]{
      width:100%;
      border:none;
      outline: none;
      border-bottom: 1px solid #74767D;
      padding-bottom:14px;
      letter-spacing: -0.06em;
      color: #333;
      font-size:14px;
      position: relative;
    }
    .search_box > input[type="search"]::-ms-clear, .search_box > input[type="search"]::-ms-reveal{
        display:none;
    }
    .search_box > input[type="search"]::-webkit-search-decoration,
    .search_box > input[type="search"]::-webkit-search-cancel-button,
    .search_box > input[type="search"]::-webkit-search-results-button,
    .search_box > input[type="search"]::-webkit-search-results-decoration{
        display:none;
    }
    .search_box > input[type="search"]::placeholder{
      color: #74767D;
    }
    .search_box > a{
      position: absolute;
      right: 20px;
      top:13px;
    }
    .search_box > h6{
      line-height: 10px;
      padding:27px 0px 10px;
      font-size:15px;
      color:#444;
    }
    .search_box > .search_keyword{
      display:flex;
      justify-content: space-between;
    }
    .search_box > .search_keyword > li{
      line-height: 15px;
    }
    .search_box > .search_keyword > li > a{
      letter-spacing: -0.04em;
      color: #444444;
      font-size:13px;
    }
    .search_show{
      display:block;
    }
    /* .blog, .post{
      display: inline-block;
      border-radius: 4px;
      width:48px;
      height: 25px;
      text-align: center;
      color:#fff;
      font-weight: 600;
    }
    .blog{
      display: inline-block;
      background: linear-gradient(180deg, #00E89E 0%, #00B195 100%);
      line-height: 25px;
    }
    .post{
      background: linear-gradient(180deg, #3887FE 0%, #4830FF 100%);
      border-radius: 4px;
      line-height: 23px;
    } */

    .header_main{
      width:100%;
      border-bottom:1px solid #E9E9E9;
    }
    .header_main > h1{
      width:1200px;
      margin:0px auto;
      display:flex;
      padding:16px 11px;
      position: relative;
      box-sizing:border-box;
    }
    .header_main > h1 > .brand_box{
      display:flex;
    }
    .brand_box > .brand_img{
      width: 42px;
      padding-right: 8px;
    }
    .brand_box > .brand_img > img{
      width:100%;
    }
    .brand_box > .brand_txt{
      line-height: 21px;
    }
    .brand_box > .brand_txt > span{
      font-size:12px;
      letter-spacing: -0.02em;
      color: #888888;
      display: block;
      font-weight: normal;
    }
    .brand_box > .brand_txt > strong{
      letter-spacing: -0.03em;
      color: #555555;
      font-size:14px;
      display: block;
      font-weight: bold;
    }
    h1 > .logo{
      position: absolute;
      left:50%;
      transform: translateX(-50%);
      font-size:23px;
      font-weight: 700;
      letter-spacing: -0.04em;
      color: #333333;
      padding:2.5px 0px;
    }
    h1 > .logo > span{
      display:inline-block;
      transform: translateY(2px);
    }
    h1 > .logo > img{
      vertical-align: middle;
    }

    .gnb_box{
      width:100%;
      border-bottom:1px solid #BEBEBE;
    }
    .gnb{
      width:1260px;
      margin: 0px auto;
      display:flex;
      justify-content: space-between;
    }
    .gnb > li{
      width:160px;
      text-align: center;
      position: relative;
    }
    .gnb > li:hover > a{
      color: #2E68FF;
    }
    .gnb > li > a{
      display:block;
      line-height: 60px;
      letter-spacing: -0.01em;
      color: #444444;
      font-size:17px;
      font-weight: 600;
    }
    .sub_mnu{
      display: none;
      position: absolute;
      left:0px;
      width:100%;
      background-color: #FFFFFF;
      border: 1px solid #E9E9E9;
      padding:15px 0px;
      z-index:9999;
    }
    .sub_mnu > li{
      /* padding:3px 27px; */
    }
    .sub_mnu > li > a{
      display:block;
      /* padding-bottom:21px; */
      padding-left:27px;
      letter-spacing: -0.04em;
      color: #333;
      font-size:14px;
      text-align: left;
      line-height: 37px;
      
    }
    .sub_mnu > li > a:hover{
      text-decoration: underline;
    }
    .aft_on1::after{
      content: "장학생 모집";
      display: inline-block;
      width:81px;
      height: 21px;
      background: #FFFFFF;
      border: 1px solid #2E68FF;
      border-radius: 31px;
      letter-spacing: -0.04em;
      color: #2E68FF;
      font-size:12px;
      position: absolute;
      top:-13px;
      left:50%;
      transform: translateX(-50%);
      line-height: 20px;
    }
    .aft_on2::after{
      content: "실시간";
      width: 57px;
      height: 21px;
      background: #FFFFFF;
      border: 1px solid #2E68FF;
      border-radius: 31px;
      letter-spacing: -0.04em;
      color: #2E68FF;
      font-size:12px;
      position: absolute;
      top:-13px;
      left:50%;
      transform: translateX(-50%);
      line-height: 20px;
    }
    .con01{
      background-color: #333;
      width:100%;
      height: 700px;
    }
    .modal{
      width:100%;
      height:100%;
      position:fixed;
      top:0px;
      left:0px;
      background: rgba(16, 16, 16, 0.3);
      z-index:10000;
    }
    .curri_list{
      position: fixed;
      top:180px;
      left:50%;
      transform: translateX(-50%);
      background-color: #fff;
      width:1115px;
      height: 568px;
      position: relative;
    }
    .curri_list > .curriculum{
      width:1115px;
      height: 568px;
      overflow-y: scroll;
    }
    .curri_list > .curriculum::-webkit-scrollbar{
      width: 8px;
    }
    /* 스크롤바 막대 설정*/
    .curri_list > .curriculum::-webkit-scrollbar-thumb{
      height: 256;
      background: #B8B8B8;
      border-radius: 17px; 
    }
    .curri_list > .curriculum > li{
      display: table;
      table-layout:fixed;
      width:100%;
    }
    .curri_list > .curriculum > li > h4{
      letter-spacing: -0.02em;
      color: #FFFFFF;
      background-color: #223CB5;
      font-size:15px;
      width: 160px;
      text-align: left;
      padding-left: 24px;
      box-sizing: border-box;
      display: table-cell;
      vertical-align: middle;
      border-bottom: 1px solid #0825A8;
    }
    .curri_list > .curriculum > li > .curriculum_sub{
      display: flex;
      flex-wrap: wrap;
      width:947px;
      padding:18px 0px 18px 14px;
      border-bottom:1px solid #EEEEEE;
      overflow-x: hidden;
      box-sizing: border-box;
    }
    .curri_list > .curriculum > li > .curriculum_sub > li{
      padding:0px 8px;
      position: relative;
      width:18.2%;
    }
    .curri_list > .curriculum > li > .curriculum_sub > li::before{
      content: "";
      display:inline-block;
      width:1px;
      height: 13px;
      background-color: #D9D9D9;
      position: absolute;
      left:0px;
      top: 50%;
      transform: translateY(-50%);
    }
    
    .curri_list > .curriculum > li > .curriculum_sub > li > a{
      letter-spacing: -0.04em;
      color: #666666;
      font-size:14px;
      line-height: 30px;
    }
    .close_btn01{
      color:#fff;
      font-size:30px;
      position:fixed;
      left:0px;
      top:-50px;
      display:block;
      background-color: #111;
      width: 50px;
      height: 50px;
      text-align: center;
      line-height: 45px;
      z-index: 11000;
    }
    li.border_none::before{
      content: none !important;
    }
    .q_mnu {
      position: absolute;
      right: calc(100% - 90%);
      top: 70%;
      transform: translateY(-50%);
      height: calc(100% - 475px);
    }
    .quickRight {
      width: 100px;
      height: 514px;
    }
    .quickRight ul {
      padding: 0;
      margin: 0;
    }
    .quickRight li{
			border: 1px solid #E9E9E9;
			width: 100px;
			box-sizing: border-box;
		}
    .quickRight li:nth-child(1) {
      background: url('./img/q_mnu_img02.jpg') no-repeat 100%;
      height: 85px;
      animation: imgon 1.5s linear infinite;
      border-bottom: none;
    }
    @keyframes imgon {
      50%{
        background: url('./img/q_mnu_img02_on.jpg') no-repeat 100%;
        height: 85px;
      }
    }
    .quickRight li:nth-child(2) {
      background: url('./img/q_mnu_img03.jpg') no-repeat 100%;
      height: 84px;
      border-bottom: none;
    }
    .quickRight li:nth-child(3) {
      background: url('./img/q_mnu_img04.jpg') no-repeat 100%;
      height: 84px;
      border-bottom: none;
    }
    .quickRight li:last-child {
      background: url('./img/q_mnu_img05.jpg') no-repeat 100%;
      height: 84px;
    }
    .quickRight li a {
      display: block;
      width: 100px;
      height: 85px;
    }
    .top_scroll-btn{
      width:56px;
      height:56px;
      background: #FFFFFF;
      border: 1px solid #4F8EF7;
      box-shadow: 0px 2.13333px 4.26667px rgba(188, 197, 229, 0.25);
      border-radius: 50%;
      margin: 18px auto;
    }
    .top_scroll-btn > a{
      display: block;
      font-size: 20px;
      text-align: center;
      line-height: 54px;
      color: #2E68FF;
    }
    .nav_act{
      position:fixed;
      right: calc(100% - 90%);
      top: 42% !important;
    }
    .icon_act{
      transform: rotate(180deg);
    }
  </style>
  <script>
    $(document).ready(function(){
      $('.gnb > li').mouseover(function(){
        $(this).find('.sub_mnu').stop().slideDown(200);
      }).mouseout(function(){
        $(this).find('.sub_mnu').stop().slideUp(200);
      });

      $(window).scroll(function(){
          
        let sPos = $(this).scrollTop();
        // console.log(sPos);

        if(250<=sPos){
          $('.q_mnu').addClass('nav_act');
        }else{
          $('.q_mnu').removeClass('nav_act');
        }
      });

      $(".search_btn").change(function(){
        $(this).parent().next('.search_box').toggleClass('search_show');

        if( $(this).children('.search_img').text() == '검색'){
          $('.search_img').text('닫기');
        }else{
          $('.search_img').text('검색');
        }
      });

      $('.modal_btn').click(function(){
        let modal = ` 
        <div class='modal'>
          <div class="curri_list">
            <ul class="curriculum">
              <li>
                <h4>강사과정</h4>
                <ul class="curriculum_sub">
                  <li class="border_none"><a href="https://www.korea-edu.net/SubLIC/indexB141.html?num=615">예절교육지도사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB063.html?num=473">퍼스널컬러컨설턴트 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB019.html?num=414">캘리그라피지도사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB072.html?num=522">쇼핑몰관리사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB043.html?num=468">리더십지도사 1급</a></li>
                  <li class="border_none"><a href="https://www.korea-edu.net/SubLIC/indexB042.html?num=449">정리수납전문가 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB070.html?num=518">SNS마케팅전문가 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB079.html?num=533">플로리스트전문가 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB090.html?num=549">영어요리지도사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB101.html?num=561">가정관리사 1급</a></li>
                  <li class="border_none"><a href="https://www.korea-edu.net/SubLIC/indexB128.html?num=600">장애인인식개선지도사 1급</a></li>
                </ul>
              </li>
              <li>
                <h4>병원과정</h4>
                <ul class="curriculum_sub">
                  <li class="border_none"><a href="https://www.korea-edu.net/SubLIC/indexB130.html?num=602">병원원무행정사 1급</a></li> 
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB008.html?num=393">병원코디네이터 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB007.html?num=392">병원행정관리사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB036.html?num=448">병원진료접수매니저 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB053.html?num=471">병원서비스매니저 1급</a></li>
                  <li class="border_none"><a href="https://www.korea-edu.net/SubLIC/indexB064.html?num=498">실버병원코디네이터 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB114.html?num=575">보험심사평가사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB087.html?num=546">요양병원관리사 1급</a></li>
                </ul>
              </li>
              <li>
                <h4>커피과정</h4>
                <ul class="curriculum_sub">
                  <li class="border_none"><a href="https://www.korea-edu.net/SubLIC/indexB071.html?num=519">커피로스팅마스터 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB061.html?num=494">티소믈리에 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB049.html?num=463">커피품질평가사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB001.html?num=390">커피바리스타전문가 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB050.html?num=464">커피핸드드립전문가 1급</a></li>
                  <li class="border_none"><a href="https://www.korea-edu.net/SubLIC/indexB051.html?num=465">와인소믈리에 1급</a></li>
                </ul>
              </li>
              <li>
                <h4>심리과정</h4>
                <ul class="curriculum_sub">
                  <li class="border_none"><a href="https://www.korea-edu.net/SubLIC/indexB148.html?num=625">군심리상담사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB074.html?num=525">원예심리상담사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexA001.html?num=398">심리상담사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexA003.html?num=389">미술심리상담사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB023.html?num=418">아동심리상담사 1급</a></li>
                  <li class="border_none"><a href="https://www.korea-edu.net/SubLIC/indexA005.html?num=399">아동미술심리상담사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexA006.html?num=397">심리분석사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexA004.html?num=402">음악심리상담사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB025.html?num=420">다문화심리상담사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB018.html?num=407">학교폭력예방상담사 1급</a></li>
                  <li class="border_none"><a href="https://www.korea-edu.net/SubLIC/indexB009.html?num=394">부모교육상담사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB022.html?num=417">아동학대예방상담사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB028.html?num=423">청소년미술심리상담사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB059.html?num=493">분노조절상담사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB122.html?num=593">노인미술심리상담사 1급</a></li>
                  <li class="border_none"><a href="https://www.korea-edu.net/SubLIC/indexB052.html?num=450">노인음악심리상담사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexA002.html?num=385">노인심리상담사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB086.html?num=545">부부심리상담사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB124.html?num=596">놀이심리상담사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB126.html?num=598">색채심리상담사 1급</a></li>
                  <li class="border_none"><a href="https://www.korea-edu.net/SubLIC/indexB129.html?num=601">가족심리상담사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB131.html?num=603">스포츠심리상담사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB138.html?num=610">문학심리상담사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB139.html?num=611">독서심리상담사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB140.html?num=612">인지행동심리상담사 1급</a></li>
                  <li class="border_none"><a href="https://www.korea-edu.net/SubLIC/indexB145.html?num=621">애니어그램심리상담사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB146.html?num=622">푸드아트심리상담사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB144.html?num=620">도형심리상담사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB170.html?num=650">심리복지상담사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB164.html?num=643">DISC심리상담사1급</a></li>
                </ul>
              </li>
              <li>
                <h4>전문가과정</h4>
                <ul class="curriculum_sub">
                  <li class="border_none"><a href="https://www.korea-edu.net/SubLIC/indexB150.html?num=627">주차관리사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB111.html?num=571">인사총무관리자 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB034.html?num=429">CS강사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB035.html?num=437">프리젠테이션전문가 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB044.html?num=469">이미지메이킹지도사 1급</a></li>
                  <li class="border_none"><a href="https://www.korea-edu.net/SubLIC/indexB084.html?num=543">결혼상담사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB088.html?num=547">골프전문캐디 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB054.html?num=472">스피치지도사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB112.html?num=572">개인정보관리사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB116.html?num=577">감정노동관리사 1급</a></li>
                  <li class="border_none"><a href="https://www.korea-edu.net/SubLIC/indexB119.html?num=580">콜센터전문상담사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB125.html?num=597">4대보험관리사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB142.html?num=616">창업상권분석지도사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB149.html?num=626">검색광고마케터 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB152.html?num=629">광고기획전문가 1급</a></li>
                  <li class="border_none"><a href="https://www.korea-edu.net/SubLIC/indexB153.html?num=630">고객상담사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB099.html?num=558">운동처방사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB156.html?num=635">직무스트레스관리사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB168.html?num=648">간병사</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB169.html?num=649">산후관리사 1급</a></li>
                </ul>
              </li>
              <li>
                <h4>실버과정</h4>
                <ul class="curriculum_sub">
                  <li class="border_none"><a href="https://www.korea-edu.net/SubLIC/indexB123.html?num=595">노인두뇌훈련지도사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB057.html?num=490">실버건강지도사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB058.html?num=491">실버레크레이션지도자 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB085.html?num=544">노후설계지도사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB065.html?num=497">노인교육지도사 1급</a></li>
                </ul>
              </li>
              <li>
                <h4>방과후과정</h4>
                <ul class="curriculum_sub">
                  <li class="border_none"><a href="https://www.korea-edu.net/SubLIC/indexB135.html?num=607">스토리텔링그림책지도사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB080.html?num=534">영어독서지도사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB076.html?num=530">영재놀이지도사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB075.html?num=529">레크리에이션지도자 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB020.html?num=509">방과후영어교육지도사 1급</a></li>
                  <li class="border_none"><a href="https://www.korea-edu.net/SubLIC/indexB062.html?num=496">보드게임지도사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB006.html?num=391">방과후학교지도사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB030.html?num=427">클레이아트 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB127.html?num=599">책놀이지도사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB011.html?num=396">스토리텔링수학지도사 1급</a></li>
                  <li class="border_none"><a href="https://www.korea-edu.net/SubLIC/indexB037.html?num=434">색종이접기지도사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB032.html?num=430">자원봉사지도사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB021.html?num=416">창의과학교육지도사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB026.html?num=421">아동청소년스피치지도사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB005.html?num=388">마술교육지도사 1급</a></li>
                  <li class="border_none"><a href="https://www.korea-edu.net/SubLIC/indexB081.html?num=536">방과후돌봄교실지도사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB132.html?num=604">하브루타지도사 1급</a></li>
                </ul>
              </li>
              <li>
                <h4>안전과정</h4>
                <ul class="curriculum_sub">
                  <li class="border_none"><a href="https://www.korea-edu.net/SubLIC/indexB055.html?num=495">재난안전지도사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB013.html?num=401">안전교육지도사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB024.html?num=419">학교보안안전지도사 1급</a></li>
                </ul>
              </li>
              <li>
                <h4>반려과정</h4>
                <ul class="curriculum_sub">
                  <li class="border_none"><a href="https://www.korea-edu.net/SubLIC/indexB038.html?num=501">반려동물관리사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB060.html?num=502">반려동물행동교정사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB098.html?num=557">반려동물장례지도사 1급</a></li>
                </ul>
              </li>
              <li>
                <h4>아동과정</h4>
                <ul class="curriculum_sub">
                  <li class="border_none"><a href="https://www.korea-edu.net/SubLIC/indexB107.html?num=567">아동발달전문지도사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB106.html?num=566">특수아동지도사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB004.html?num=387">동화구연지도사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB033.html?num=433">놀이교육지도사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB016.html?num=405">아동교육지도사 1급</a></li>
                  <li class="border_none"><a href="https://www.korea-edu.net/SubLIC/indexB010.html?num=395">손유희지도사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB082.html?num=538">아동독서지도사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB093.html?num=552">아동미술지도사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB096.html?num=555">아동복지상담사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB012.html?num=400">아동요리지도사 1급</a></li>
                  <li class="border_none"><a href="https://www.korea-edu.net/SubLIC/indexB158.html?num=637">오감놀이지도사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB031.html?num=428">베이비시터</a></li>
                </ul>
              </li>
              <li>
                <h4>공부과정</h4>
                <ul class="curriculum_sub">
                  <li class="border_none"><a href="https://www.korea-edu.net/SubLIC/indexB105.html?num=565">진로직업상담사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB068.html?num=513">독서토론지도사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB003.html?num=386">독서지도사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB017.html?num=406">진로적성상담사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB015.html?num=404">자기주도학습지도사 1급</a></li>
                  <li class="border_none"><a href="https://www.korea-edu.net/SubLIC/indexB002.html?num=384">공부습관지도사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB067.html?num=514">공부방지도사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB094.html?num=553">독서논술지도사 1급</a></li>
                </ul>
              </li>
              <li>
                <h4>인문과정</h4>
                <ul class="curriculum_sub">
                  <li class="border_none"><a href="https://www.korea-edu.net/SubLIC/indexB091.html?num=550">한국어지도사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB083.html?num=539">한자지도사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB078.html?num=532">인문학지도사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB056.html?num=475">한국사지도사 1급</a></li>
                </ul>
              </li>
              <li>
                <h4>부동산과정</h4>
                <ul class="curriculum_sub">
                  <li class="border_none"><a href="https://www.korea-edu.net/SubLIC/indexB151.html?num=628">건물관리사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB066.html?num=507">부동산자산관리지도사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB048.html?num=466">빌딩관리사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB097.html?num=556">부동산분양상담전문가 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB117.html?num=576">부동산권리분석사 1급</a></li>
                  <li class="border_none"><a href="https://www.korea-edu.net/SubLIC/indexB157.html?num=636">부동산토지전문가 1급</a></li>
                </ul>
              </li>
              <li>
                <h4>산업과정</h4>
                <ul class="curriculum_sub">
                  <li class="border_none"><a href="https://www.korea-edu.net/SubLIC/indexB147.html?num=623">품질검사마스터 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB108.html?num=568">6시그마(GB)</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB077.html?num=531">3D프린팅지도사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB109.html?num=569">기업생산관리자 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB110.html?num=570">코딩지도사 1급</a></li>
                </ul>
              </li>
              <li>
                <h4>IT과정</h4>
                <ul class="curriculum_sub">
                  <li class="border_none"><a href="https://www.korea-edu.net/SubLIC/indexB143.html?num=619">네트워크전문가 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB073.html?num=524">스마트IT컴퓨터지도사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB100.html?num=560">빅데이터전문가 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB102.html?num=562">컴퓨터OA마스터 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB118.html?num=578">소프트웨어교육지도사 1급</a></li>
                  <li class="border_none"><a href="https://www.korea-edu.net/SubLIC/indexB134.html?num=606">해킹보안전문가 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB133.html?num=605">정보보안전문가 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB136.html?num=608">컴퓨터사무정보처리사 1급</a></li>
                </ul>
              </li>
              <li>
                <h4>취업과정</h4>
                <ul class="curriculum_sub">
                  <li class="border_none"><a href="https://www.korea-edu.net/SubLIC/indexB115.html?num=573">전문비서 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB092.html?num=551">HRD전문가 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB095.html?num=554">전산회계 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB104.html?num=564">스마트폰활용지도사 1급</a></li>
                </ul>
              </li>
              <li>
                <h4>항공과정</h4>
                <ul class="curriculum_sub">
                  <li class="border_none"><a href="https://www.korea-edu.net/SubLIC/indexB137.html?num=609">DCS 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB121.html?num=592">항공서비스전문가 1급</a></li>
                </ul>
              </li>
              <li>
                <h4>공예과정</h4>
                <ul class="curriculum_sub">
                  <li class="border_none"><a href="https://www.korea-edu.net/SubLIC/indexB154.html?num=633">캔들공예지도사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB155.html?num=634">풍선아트지도사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB159.html?num=638">냅킨아트지도사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB161.html?num=640">조향사 1급</a></li>
                  <li><a href="https://www.korea-edu.net/SubLIC/indexB167.html?num=647">레진아트지도사 1급</a></li>
                </ul>
              </li>
            </ul>
            <div class="btn_box2">
              <a href="#" title="닫기" onclick="return false;" class="close_btn01"><i class='fas fa-times'></i></a>
            </div>
          </div>
        </div>`

        $('body').append(modal).fadeIn(); // body 태그 안 뒤쪽에 내용을 추가

        $('.close_btn01').click(function(){
          $('.modal').fadeOut();
        });


      });
    })

    $(window).scroll(function(){
        let scrollY = $(this).scrollTop();

        if(scrollY >=50){
          $('.top_scroll-btn').fadeIn();
        }else{
          $('.top_scroll-btn').fadeOut();
        }

      });
      $(document).ready(function() {
        $('.top_scroll-btn').bind('click', function() {
          $('html, body').animate({scrollTop: '0'}, 500);
        });
        // 애니메이션 효과로 자연스럽게 이동됨, 0.68초
      });
  </script>

  <header>
    <div class="header_top">
      <div class="header_inner">
        <ul class="inner_left">
          <li>
            <a href="#" title="교육과정" class="modal_btn">교육과정<i class="fas fa-angle-down"></i></a>
          </li>
          <li>
            <a href="pc_license_request.html" title="자격증발급">자격증 발급 <i class="fas fa-angle-right"></i></a>
          </li>
        </ul>
        <ul class="inner_right">
          <!-- <li>
            <a href="#" title="blog" class="blog">blog</a>
          </li>
          <li>
            <a href="#" title="post" class="post">post</a>
          </li> -->
          <li>
            <a href="https://www.korea-edu.net/class/login.html" title="로그인">로그인</a>
          </li>
          <li>
            <a href="pc_join.html" title="회원가입">무료회원가입</a>
          </li>
          <li class="search_btn">
            <!-- <a href="#" title="검색" class="search_img">
              <span>검색</span>
            </a> -->
            <input type="checkbox" id="search" class="search_ch">
            <label for="search" class="search_img">검색</label>
          </li>
        </ul>
        <div class="search_box">
          <input type="search" id="search_form" placeholder="찾으시는 과정을 검색해주세요.">
          <a href="#" title="검색">
            <img src="./img/pc_header_search.svg" alt="검색">
          </a>
          <h6>인기과정</h6>
          <ul class="search_keyword">
            <li>
              <a href="https://www.korea-edu.net/SubLIC/indexB001.html?num=390" title="인기과정">#커피바리스타1급</a>
            </li>
            <li>
              <a href="https://www.korea-edu.net/SubLIC/indexA001.html?num=398" title="인기과정">#심리상담사1급</a>
            </li>
            <li>
              <a href="https://www.korea-edu.net/SubLIC/indexB008.html?num=393" title="인기과정">#병원코디네이터1급</a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="header_main">
      <h1>
        <div class="brand_box">
          <div class="brand_img">
            <img src="./img/header_top_brand.png" alt="브랜드대상">
          </div>
          <div class="brand_txt">
            <span>(주관)한경business</span>
            <strong>대한민국 교육부문 우수 브랜드 대상</strong>
          </div>
        </div>
        <a href="https://www.korea-edu.net" title="상단로고" class="logo">
          <img src="./img/pc_header_logo.svg" alt="상단로고">
          <span>한국자격검정평가진흥원</span> 
        </a>
      </h1>
    </div>

    <nav class="gnb_box">
      <ul class="gnb">
        <li>
          <a href="https://www.korea-edu.net/site/ps_license/index.html" title="교육원소개">교육원소개</a>
          <ul class="sub_mnu">
            <li>
              <a href="https://www.korea-edu.net/site/ps_license/index.html" title="서브메뉴">교육원 소개</a>
            </li>
            <li>
              <a href="https://www.korea-edu.net/site/ps_license//index02.html" title="서브메뉴">조직도</a>
            </li>
            <li>
              <a href="https://www.korea-edu.net/site/ps_license//index03.html" title="서브메뉴">찾아오시는 길</a>
            </li>
          </ul>
        </li>
        <li class="aft_on1">
          <a href="pc_enrolment.html" title="수강신청">수강신청</a>
        </li>
        <li>
          <a href="pc_notice.html" title="고객센터">고객센터</a>
          <ul class="sub_mnu">
            <li>
              <a href="pc_notice.html" title="서브메뉴">공지사항</a>
            </li>
            <li>
              <a href="pc_notice.html" title="서브메뉴">수강관련문의</a>
            </li>
            <li>
              <a href="pc_notice.html" title="서브메뉴">자격증배송문의</a>
            </li>
            <li>
              <a href="pc_notice.html" title="서브메뉴">입금/결제문의</a>
            </li>
            <li>
              <a href="pc_notice.html" title="서브메뉴">단체수강문의</a>
            </li>
            <li>
              <a href="pc_notice.html" title="서브메뉴">이벤트게시판</a>
            </li>
            <li>
              <a href="pc_notice.html" title="서브메뉴">자주묻는질문</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="pc_progress_lecture.html" title="나의강의실">나의강의실</a>
          <ul class="sub_mnu">
            <li>
              <a href="pc_progress_lecture.html" title="서브메뉴">수강중인 과정</a>
            </li>
            <li>
              <a href="pc_progress_lecture.html" title="서브메뉴">진도율</a>
            </li>
            <li>
              <a href="https://www.korea-edu.net/class/enrollment.html" title="서브메뉴">수강신청내역</a>
            </li>
            <li>
              <a href="https://www.korea-edu.net/class/private_info.html" title="서브메뉴">개인정보취급방침</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="pc_license_request.html" title="발급신청">발급신청</a>
        </li>
        <li class="aft_on2">
          <a href="https://www.korea-edu.net/StreamLine/index/board/experience_list.php" title="합격후기">합격후기</a>
        </li>
        <li>
          <a href="https://www.korea-edu.net/StreamLine/index/board/event_list.php" title="수강이벤트">수강이벤트</a>
          <ul class="sub_mnu">
            <li>
              <a href="https://www.korea-edu.net/StreamLine/index/board/experience_list.php" title="서브메뉴">합격후기</a>
            </li>
            <li>
              <a href="https://www.korea-edu.net/StreamLine/index/board/event_list.php" title="서브메뉴">친구추천</a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  
  </header>
  <aside class="q_mnu">
    <div class="quickRight">
      <h3><img src="./img/q_mnu_img01.png"></h3>
      <ul>
        <li><a href="https://www.korea-edu.net/class/class_enroll.html"></a></li>
        <li><a href="https://pf.kakao.com/_Excxbvb/chat"></a></li>
        <li><a href="https://www.korea-edu.net/StreamLine/index/board/qna_class_list.php"></a></li>
        <li><a href="https://www.korea-edu.net/StreamLine/index/board/experience_list.php"></a></li>
      </ul>
    </div>
    <div class="top_scroll-btn">
      <a href="#" title="상단으로이동" onclick="return false;"><i class="fas fa-angle-up"></i></a>
    </div>
  </aside>