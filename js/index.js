var Events,
  __bind = function(fn, me){ return function(){ return fn.apply(me, arguments); }; };

window.Application = (function() {
  var defaultRoute;

  function Application() {
    this.render = __bind(this.render, this);
    this.load = __bind(this.load, this);
  }

  defaultRoute = "#home";

  Application.prototype.load = function(e) {
    var req, route;
    $("#lightbox").show();
    route = $(e.target).attr("href");
    return req = $.ajax({
      url: "/parts/get.php",
      data: {
        'route': route.replace("#", "")
      },
      type: "POST",
      success: this.render
    });
  };

  Application.prototype.render = function(response) {
    $("#container").html(response);
    return $("#lightbox").hide();
  };

  return Application;

})();

window.BootStrap = (function() {
  var app;

  app = null;

  function BootStrap(app) {
    this.app = app;
    this.parseRoute = __bind(this.parseRoute, this);
    $("#menu li").live("click", this.parseRoute);
  }

  BootStrap.prototype.parseRoute = function(e) {
    return this.app.load(e);
  };

  return BootStrap;

})();

Events = (function() {
  function Events() {
    this.hideShow = __bind(this.hideShow, this);
    this.init = __bind(this.init, this);
  }

  Events.prototype.init = function() {
    return $(".uncover").live("click", this.hideShow);
  };

  Events.prototype.hideShow = function(e) {
    var targetEl;
    targetEl = $(e.currentTarget).attr("data-target");
    return $("#" + targetEl).slideToggle(500);
  };

  return Events;

})();

$(document).ready(function() {
  window.boot = new BootStrap(new Application);
  window.evs = new Events;
  return evs.init();
});
