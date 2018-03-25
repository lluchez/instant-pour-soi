'use strict';

var IPS = {
  selectPanelFromUrl: function() {
    this.showPanel(document.location.hash);
  },
  linkClicked: function(event, a) {
    this.showPanel(a.href);
  },
  showPanel: function(url) {
    var m, defaultPanelID = 'home', panelIdNotFound = 'error-404', panelIdToShow = panelIdNotFound, panelsToShow;
    if( (m = url.match(/(?:^|\/)(#\/([\w\-]+))?$/)) )
      panelIdToShow = m[2] || defaultPanelID;
    if( ! (panelsToShow = this.findPanel(panelIdToShow)).length )
      panelsToShow = this.findPanel(panelIdNotFound);
    $('.panels-holder > *').hide();
    $(panelsToShow).show();
    //$("html, body").animate({ scrollTop: 0 }, "slow");
    window.scrollTo(0, 0);
  },
  findPanel: function(panelIdToShow) {
    return $('.panels-holder > *[panel-id="'+panelIdToShow+'"]');
  }
};

// DOM-ready initialization
$(document).ready(function(e) {
  IPS.selectPanelFromUrl();
  $(".navbar-nav li a").click(function(event) {
    if( this.href )
    $(".navbar-collapse").collapse('hide');
  });
  $('a:not([role^=button])').click(function(e) {
    IPS.linkClicked(e, this);
  });

  $('#home-carousel').bind('slide.bs.carousel', function (e) {
    var slideFrom = $(this).find('.active').index();
    var slideTo = $(e.relatedTarget).index();
    $(this).addClass('hide-texts');
  });
  $('#home-carousel').bind('slid.bs.carousel', function (e) {
    var slideID = $(this).find('.active').index();
    $(this).removeClass('hide-texts');
  });

});

$(window).bind('hashchange', function(event) {
  IPS.selectPanelFromUrl();
});

