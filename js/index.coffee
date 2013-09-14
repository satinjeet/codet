class window.Application
  
  defaultRoute = "#home"
  
  load: (e)=>
    route = $(e.target).attr("href")
    req = $.ajax
      url: "/parts/get.php"
      data: 
        'route': route.replace "#", ""
      type: "POST"
      success: @render
      
  render: (response)=>
    $("#container").html response
    
class window.BootStrap
  
  app = null
  
  constructor: (@app)->
    $("#menu li").live "click", @parseRoute
    
  parseRoute: (e)=>
    @app.load e
    
    
class Events

  init: =>
    $(".uncover").live "click", @hideShow
    
  hideShow: (e)=>
    targetEl = $(e.currentTarget).attr "data-target"
    $("##{targetEl}").slideToggle 500
    
$(document).ready ->
  window.boot = new BootStrap new Application
  window.evs = new Events
  evs.init()