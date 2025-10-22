// LOAD THE "ON" BUTTONS
i0on=new Image();  i0on.src="./gfx/m_top_h.png";
i1on=new Image();  i1on.src="./gfx/mb_index_h.png";
i2on=new Image();  i2on.src="./gfx/mb_gnu_h.png";
i3on=new Image();  i3on.src="./gfx/mb_programming_h.png";
i4on=new Image();  i4on.src="./gfx/mb_articles_h.png";
i5on=new Image();  i5on.src="./gfx/mb_photoblog_h.png";
i6on=new Image();  i6on.src="./gfx/mb_blog_h.png";
i7on=new Image();  i7on.src="./gfx/mb_links_h.png";
i8on=new Image();  i8on.src="./gfx/mb_contact_h.png";
mvon=new Image();  mvon.src="./gfx/mm_v_h.png";

// LOAD THE "OFF" BUTTONS
i0off=new Image();  i0off.src="./gfx/m_top.png";
i1off=new Image();  i1off.src="./gfx/mb_index.png";
i2off=new Image();  i2off.src="./gfx/mb_gnu_g.png";
i3off=new Image();  i3off.src="./gfx/mb_programming.png";
i4off=new Image();  i4off.src="./gfx/mb_articles_g.png";
i5off=new Image();  i5off.src="./gfx/mb_photoblog.png";
i6off=new Image();  i6off.src="./gfx/mb_blog_g.png";
i7off=new Image();  i7off.src="./gfx/mb_links.png";
i8off=new Image();  i8off.src="./gfx/mb_contact_g.png";
mvoff=new Image();  mvoff.src="./gfx/mm_v.png";

// FUNCTIONS TO SWITCH THE BUTTONS ON MOUSE EVENTS
function imgOn(whichButton) {
  document.images[whichButton].src=eval(whichButton+"on.src");
}
function imgOff(whichButton) {
  document.images[whichButton].src=eval(whichButton+"off.src");
}

// Functions to collapse and expand menu - Updated to use localStorage instead of cookies
function menuColap(whichMenu) {
  if( whichMenu == "main" ) {
    localStorage.setItem("menu_state", "closed");
    document.getElementById('main_menu').innerHTML = "<a href='javascript:void(0)' onClick=menuExp('main'); return true; onmouseover=imgOn('mv'); window.status=''; return true; onmouseout=imgOff('mv'); window.status=''; return true;><img border=0 src=./gfx/mm_v.png alt='Main Menu Shrunk' name='mv'></a>";
  }
  if( whichMenu == "linux" ) {
    localStorage.setItem("linux_menu_state", "closed");
    document.getElementById('linux_menu').innerHTML = "<a href='javascript:void(0)' onClick=menuExp('linux'); return true; onmouseover=imgOn('mlv'); window.status=''; return true; onmouseout=imgOff('mlv'); window.status=''; return true;><img border=0 src=./gfx/ml_v.png alt='Linux Menu Shrunk' name='mlv'></a>";
    document.getElementById('lines').innerHTML = "<img border='0' src='./gfx/lines2.png'>";
  }
  if( whichMenu == "programming" ) {
    localStorage.setItem("programming_menu_state", "closed");
    document.getElementById('programming_menu').innerHTML = "<a href='javascript:void(0)' onClick=menuExp('programming'); return true; onmouseover=imgOn('mpv'); window.status=''; return true; onmouseout=imgOff('mpv'); window.status=''; return true;><img border=0 src=./gfx/mp_v.png alt='Programming Menu Shrunk' name='mpv'></a>";
  }
}

function menuExp(whichMenu) {
  if( whichMenu == "main" ) {
    localStorage.setItem("menu_state", "open");
    loadMainMenu();
  }
  if( whichMenu == "linux" ) {
    localStorage.setItem("linux_menu_state", "open");
    fetch("linux_menu.html")
      .then(response => response.text())
      .then(html => {
        document.getElementById('linux_menu').innerHTML = html;
        document.getElementById('lines').innerHTML = "<img border='0' src='./gfx/lines.png'>";
      });
  }
  if( whichMenu == "programming" ) {
    localStorage.setItem("programming_menu_state", "open");
    fetch("programming_menu.html")
      .then(response => response.text())
      .then(html => document.getElementById('programming_menu').innerHTML = html);
  }
}

// Function to load the main menu HTML (with updated links)
function loadMainMenu() {
  // Initialize Google Analytics separately
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-24668202-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script');
    ga.type = 'text/javascript';
    ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(ga, s);
  })();

  // Load menu HTML without script tags - using string concatenation instead of template literals
  var menuHTML = '<table style="line-height:0px; font-size:0px;" border="0" cellspacing="0" cellpadding="0">';
  menuHTML += '<tr><td>';
  menuHTML += '<a href="javascript:void(0)" onClick="menuColap(\'main\'); return true;" onmouseover="imgOn(\'i0\'); window.status=\'\'; return true;" onmouseout="imgOff(\'i0\'); window.status=\'\'; return true;">';
  menuHTML += '<img border="0" src="./gfx/m_top.png" alt="Hide Menu" name="i0"></a>';
  menuHTML += '</td></tr><tr><td>';
  menuHTML += '<a href="./index.html" onmouseover="imgOn(\'i1\'); window.status=\'\'; return true;" onmouseout="imgOff(\'i1\'); window.status=\'\'; return true;">';
  menuHTML += '<img border="0" src="./gfx/mb_index.png" alt="Index" name="i1"></a>';
  menuHTML += '</td></tr><tr><td>';
  menuHTML += '<a href="./linux_documents.html" onmouseover="imgOn(\'i2\'); window.status=\'\'; return true;" onmouseout="imgOff(\'i2\'); window.status=\'\'; return true;">';
  menuHTML += '<img border="0" src="./gfx/mb_gnu_g.png" alt="GNU Linux" name="i2"></a>';
  menuHTML += '</td></tr><tr><td>';
  menuHTML += '<a href="./programming.html" onmouseover="imgOn(\'i3\'); window.status=\'\'; return true;" onmouseout="imgOff(\'i3\'); window.status=\'\'; return true;">';
  menuHTML += '<img border="0" src="./gfx/mb_programming.png" alt="Programming" name="i3"></a>';
  menuHTML += '</td></tr><tr><td>';
  menuHTML += '<a href="./articles.html" onmouseover="imgOn(\'i4\'); window.status=\'\'; return true;" onmouseout="imgOff(\'i4\'); window.status=\'\'; return true;">';
  menuHTML += '<img border="0" src="./gfx/mb_articles_g.png" alt="Articles" name="i4"></a>';
  menuHTML += '</td></tr><tr><td>';
  menuHTML += '<a href="./contact_info.html" onmouseover="imgOn(\'i8\'); window.status=\'\'; return true;" onmouseout="imgOff(\'i8\'); window.status=\'\'; return true;">';
  menuHTML += '<img border="0" src="./gfx/mb_contact_g.png" alt="Contact Information" name="i8"></a>';
  menuHTML += '</td></tr>';
  menuHTML += '</table>';

  document.getElementById('main_menu').innerHTML = menuHTML;
}

// Linux menu image preloading
ml0on=new Image();  ml0on.src="./gfx/ml_top_h.png";
ml1on=new Image();  ml1on.src="./gfx/mbl_scp_h.png";
ml2on=new Image();  ml2on.src="./gfx/mbl_find_h.png";
ml3on=new Image();  ml3on.src="./gfx/mbl_date_h.png";
ml4on=new Image();  ml4on.src="./gfx/mbl_xterm_h.png";
ml5on=new Image();  ml5on.src="./gfx/mbl_apache_h.png";
ml6on=new Image();  ml6on.src="./gfx/mbl_phpbb_h.png";
mlvon=new Image();  mlvon.src="./gfx/ml_v_h.png";

ml0off=new Image();  ml0off.src="./gfx/ml_top.png";
ml1off=new Image();  ml1off.src="./gfx/mbl_scp.png";
ml2off=new Image();  ml2off.src="./gfx/mbl_find.png";
ml3off=new Image();  ml3off.src="./gfx/mbl_date.png";
ml4off=new Image();  ml4off.src="./gfx/mbl_xterm.png";
ml5off=new Image();  ml5off.src="./gfx/mbl_apache.png";
ml6off=new Image();  ml6off.src="./gfx/mbl_phpbb.png";
mlvoff=new Image();  mlvoff.src="./gfx/ml_v.png";

// Programming menu image preloading
mp0on=new Image();  mp0on.src="./gfx/mp_top_h.png";
mp1on=new Image();  mp1on.src="./gfx/mbp_q2source_h.png";
mp2on=new Image();  mp2on.src="./gfx/mbp_qpong_h.png";
mp3on=new Image();  mp3on.src="./gfx/mbp_vbsql_h.png";
mp4on=new Image();  mp4on.src="./gfx/mbp_test2_h.png";
mpvon=new Image();  mpvon.src="./gfx/mp_v_h.png";

mp0off=new Image();  mp0off.src="./gfx/mp_top.png";
mp1off=new Image();  mp1off.src="./gfx/mbp_q2source.png";
mp2off=new Image();  mp2off.src="./gfx/mbp_qpong.png";
mp3off=new Image();  mp3off.src="./gfx/mbp_vbsql.png";
mp4off=new Image();  mp4off.src="./gfx/mbp_test2.png";
mpvoff=new Image();  mpvoff.src="./gfx/mp_v.png";

// Function to get random logo (replaces PHP mt_rand)
function getRandomLogo() {
  const odds = Math.floor(Math.random() * 8);
  let logoNumber;
  if (odds < 3) {
    logoNumber = "0";
  } else if (odds >= 3 && odds < 6) {
    logoNumber = "3";
  } else {
    logoNumber = odds.toString();
  }
  return "./gfx/logo" + logoNumber + ".png";
}

// Initialize page when DOM is loaded
function initializePage() {
  console.log('Initializing page...');
  // Set random logo if it exists on the page
  const logoImg = document.getElementById('randomLogo');
  if (logoImg) {
    logoImg.src = getRandomLogo();
    console.log('Set random logo');
  }

  // Check menu state from localStorage and load menu
  const menuState = localStorage.getItem('menu_state');
  console.log('Menu state from localStorage:', menuState);
  if (menuState === 'closed') {
    // Show collapsed menu
    menuColap('main');
  } else {
    // Show expanded menu (default)
    localStorage.setItem('menu_state', 'open');
    loadMainMenu();
    console.log('Called loadMainMenu');
  }
}

// Try multiple ways to ensure initialization
if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initializePage);
} else {
  // DOM is already loaded
  initializePage();
}

// Also add a fallback
window.addEventListener('load', function() {
  if (!document.getElementById('main_menu').innerHTML || document.getElementById('main_menu').innerHTML.trim() === '<!-- Main Menu will be loaded here by JavaScript -->') {
    console.log('Menu not loaded, trying again...');
    initializePage();
  }
});
