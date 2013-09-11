var boot,
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
    $("#container").hide(500);
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
    return $("#container").show(500);
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

boot = new BootStrap(new Application);