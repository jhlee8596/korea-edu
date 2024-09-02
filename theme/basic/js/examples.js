$(document).ready(function() {

  // the basics
  // ----------

  var substringMatcher = function(strs) {
    return function findMatches(q, cb) {
      var matches, substringRegex;

      // an array that will be populated with substring matches
      matches = [];

      // regex used to determine if a string contains the substring `q`
      substrRegex = new RegExp(q, 'i');

      // iterate through the pool of strings and for any string that
      // contains the substring `q`, add it to the `matches` array
      $.each(strs, function(i, str) {
        if (substrRegex.test(str)) {
          matches.push(str);
        }
      });

      cb(matches);
    };
  };

  var states = [
        "예절교육지도사 1급",
        "장애인인식개선지도사 1급",
        "가정관리사 1급",
        "퍼스널컬러컨설턴트 1급",
        "플로리스트전문가 1급",
        "캘리그라피지도사 1급",
        "SNS마케팅전문가 1급",
        "영어요리지도사 1급",
        "정리수납전문가 1급",
        "쇼핑몰관리사 1급",
        "리더십지도사 1급",
        "병원원무행정사 1급",
        "보험심사평가사 1급",
        "실버병원코디네이터",
        "병원코디네이터 1급",
        "병원행정관리사 1급",
        "병원진료접수매니저 1급",
        "병원서비스매니저 1급",
        "요양병원관리사 1급",
        "커피바리스타전문가 1급",
        "커피핸드드립전문가 1급",
        "커피품질평가사 1급",
        "와인소믈리에 1급",
        "티소믈리에 1급",
        "커피로스팅마스터 1급",
        "심리상담사 1급",
        "군심리상담사 1급",
        "푸드아트심리상담사 1급",
        "애니어그램심리상담사 1급",
        "도형심리상담사 1급",
        "독서심리상담사 1급",
        "인지행동심리상담사 1급",
        "문학심리상담사 1급",
        "스포츠심리상담사 1급",
        "가족심리상담사 1급",
        "색채심리상담사 1급",
        "놀이심리상담사 1급",
        "노인음악심리상담사 1급",
        "노인심리상담사 1급",
        "노인미술심리상담사 1급",
        "청소년미술심리상담사 1급",
        "아동미술심리상담사 1급",
        "아동학대예방상담사 1급",
        "학교폭력예방상담사 1급",
        "다문화심리상담사 1급",
        "부부심리상담사 1급",
        "미술심리상담사 1급",
        "음악심리상담사 1급",
        "원예심리상담사 1급",
        "아동심리상담사 1급",
        "부모교육상담사 1급",
        "분노조절상담사 1급",
        "심리분석사 1급",
        "심리복지상담사 1급",
        "DISC심리상담사 1급",
        "모래놀이심리상담사 1급",
        "연극심리상담사 1급",
        "노인두뇌훈련지도사 1급",
        "실버건강지도사 1급",
        "실버레크레이션지도자 1급",
        "노후설계지도사 1급",
        "노인교육지도사 1급",
        "고객상담사 1급",
        "광고기획전문가 1급",
        "주차관리사 1급",
        "검색광고마케터 1급",
        "창업상권분석지도사 1급",
        "4대보험관리사 1급",
        "콜센터전문상담사 1급",
        "감정노동관리사 1급",
        "운동처방사 1급",
        "개인정보관리사 1급",
        "인사총무관리자 1급",
        "이미지메이킹지도사 1급",
        "프리젠테이션전문가 1급",
        "스피치지도사 1급",
        "골프전문캐디 1급",
        "결혼상담사 1급",
        "CS강사 1급",
        "직무스트레스관리사 1급",
        "간병사",
        "산후관리사 1급",
        "유튜브크리에이터전문가 1급",
        "학교보안안전지도사 1급",
        "안전교육지도사 1급",
        "재난안전지도사 1급",
        "반려동물행동교정사 1급",
        "반려동물장례지도사 1급",
        "반려동물관리사 1급",
        "스토리텔링그림책지도사 1급",
        "영어독서지도사 1급",
        "영재놀이지도사 1급",
        "레크리에이션지도자 1급",
        "방과후영어교육지도사 1급",
        "보드게임지도사 1급",
        "방과후학교지도사1 급",
        "클레이아트 1급",
        "책놀이지도사 1급",
        "스토리텔링수학지도사 1급",
        "색종이접기지도사 1급",
        "자원봉사지도사 1급",
        "창의과학교육지도사 1급",
        "아동청소년스피치지도사 1급",
        "마술교육지도사 1급",
        "방과후돌봄교실지도사 1급",
        "하브루타지도사 1급",
        "특수아동지도사 1급",
        "아동발달전문지도사 1급",
        "아동복지상담사 1급",
        "아동미술지도사 1급",
        "아동요리지도사 1급",
        "놀이교육지도사 1급",
        "아동교육지도사 1급",
        "동화연구지도사 1급",
        "아동독서지도사 1급",
        "손유희지도사 1급",
        "오감놀이지도사 1급",
        "베이비시터 1급",
        "전래놀이지도사 1급",
        "언어발달지도사 1급",
        "진로직업상담사 1급",
        "독서논술지도사 1급",
        "자기주도학습지도사 1급",
        "진로적성상담사 1급",
        "공부습관지도사 1급",
        "독서토론지도사 1급",
        "공부방지도사 1급",
        "독서지도사 1급",
        "건물관리사 1급",
        "부동산권리분석사 1급",
        "부동산분양상담전문가 1급",
        "빌딩관리사 1급",
        "부동산자산관리지도사 1급",
        "부동산토지전문가 1급",
        "한국어지도사 1급",
        "한국사지도사 1급",
        "인문학지도사 1급",
        "한자지도사 1급",
        "품질검사마스터 1급",
        "코딩지도사 1급",
        "6시그마(GB) 1급",
        "기업생산관리자 1급",
        "3D프린팅지도사 1급",
        "전문비서 1급",
        "HRD전문가 1급",
        "전산회계 1급",
        "스마트폰활용지도사 1급",
        "네트워크전문가 1급",
        "컴퓨터사무정보처리사 1급",
        "정보보안전문가 1급",
        "해킹보안전문가 1급",
        "소프트웨어교육지도사 1급",
        "스마트IT컴퓨터지도사 1급",
        "빅데이터전문가 1급",
        "컴퓨터OA마스터 1급",
        "DCS 1급",
        "항공서비스전문가 1급",
        "캔들공예지도사 1급",
        "풍선아트지도사 1급",
        "냅킨아트지도사 1급",
        "조향사 1급",
        "레진아트지도사 1급",
        "북아트지도사 1급",
        "POP아트디자인지도사 1급",
  ];

  $('#the-basics .typeahead').typeahead({
    hint: true,
    highlight: true,
    minLength: 1
  },
  {
    name: 'states',
    source: substringMatcher(states)
  });

  // bloodhound
  // ----------

  // constructs the suggestion engine
  var states = new Bloodhound({
    datumTokenizer: Bloodhound.tokenizers.whitespace,
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    // `states` is an array of state names defined in "The Basics"
    local: states
  });

  $('#bloodhound .typeahead').typeahead({
    hint: true,
    highlight: true,
    minLength: 1
  },
  {
    name: 'states',
    source: states
  });

  // prefetch
  // --------

  var countries = new Bloodhound({
    datumTokenizer: Bloodhound.tokenizers.whitespace,
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    // url points to a json file that contains an array of country names, see
    // https://github.com/twitter/typeahead.js/blob/gh-pages/data/countries.json
    prefetch: '../data/countries.json'
  });

  // passing in `null` for the `options` arguments will result in the default
  // options being used
  $('#prefetch .typeahead').typeahead(null, {
    name: 'countries',
    source: countries
  });

  // remote
  // ------

  var bestPictures = new Bloodhound({
    datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    prefetch: '../data/films/post_1960.json',
    remote: {
      url: '../data/films/queries/%QUERY.json',
      wildcard: '%QUERY'
    }
  });

  $('#remote .typeahead').typeahead(null, {
    name: 'best-pictures',
    display: 'value',
    source: bestPictures
  });

  // default suggestions
  // -------------------

  var nflTeams = new Bloodhound({
    datumTokenizer: Bloodhound.tokenizers.obj.whitespace('team'),
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    identify: function(obj) { return obj.team; },
    prefetch: '../data/nfl.json'
  });

  function nflTeamsWithDefaults(q, sync) {
    if (q === '') {
      sync(nflTeams.get('Detroit Lions', 'Green Bay Packers', 'Chicago Bears'));
    }

    else {
      nflTeams.search(q, sync);
    }
  }

  $('#default-suggestions .typeahead').typeahead({
    minLength: 0,
    highlight: true
  },
  {
    name: 'nfl-teams',
    display: 'team',
    source: nflTeamsWithDefaults
  });

  // custom templates
  // ----------------

  $('#custom-templates .typeahead').typeahead(null, {
    name: 'best-pictures',
    display: 'value',
    source: bestPictures,
    templates: {
      empty: [
        '<div class="empty-message">',
          'unable to find any Best Picture winners that match the current query',
        '</div>'
      ].join('\n'),
      suggestion: Handlebars.compile('<div><strong>{{value}}</strong> – {{year}}</div>')
    }
  });

  // multiple datasets
  // -----------------

  var nbaTeams = new Bloodhound({
    datumTokenizer: Bloodhound.tokenizers.obj.whitespace('team'),
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    prefetch: '../data/nba.json'
  });

  var nhlTeams = new Bloodhound({
    datumTokenizer: Bloodhound.tokenizers.obj.whitespace('team'),
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    prefetch: '../data/nhl.json'
  });

  $('#multiple-datasets .typeahead').typeahead({
    highlight: true
  },
  {
    name: 'nba-teams',
    display: 'team',
    source: nbaTeams,
    templates: {
      header: '<h3 class="league-name">NBA Teams</h3>'
    }
  },
  {
    name: 'nhl-teams',
    display: 'team',
    source: nhlTeams,
    templates: {
      header: '<h3 class="league-name">NHL Teams</h3>'
    }
  });

  // scrollable dropdown menu
  // ------------------------

  $('#scrollable-dropdown-menu .typeahead').typeahead(null, {
    name: 'countries',
    limit: 10,
    source: countries
  });

  // rtl
  // ---

  var arabicPhrases = new Bloodhound({
    datumTokenizer: Bloodhound.tokenizers.whitespace,
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    local: [
      "الإنجليزية",
      "نعم",
      "لا",
      "مرحبا",
      "أهلا"
    ]
  });

  $('#rtl-support .typeahead').typeahead({
    hint: false
  },
  {
    name: 'arabic-phrases',
    source: arabicPhrases
  });
});