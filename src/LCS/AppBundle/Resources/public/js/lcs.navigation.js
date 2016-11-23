
LCS.NAVIGATION = LCS.NAVIGATION || (function ($, ui) {
    
    //main object
    var ns = {};
    
    ns.postToJsonAction = function(route, routeData, data, successCallback, errorCallback){
        
        var url = Routing.generate(route, routeData);
        
        $.post(url, data, function(response){
            if(!response.success){
                ui.error("ERROR!: " + response.message);

                if (typeof(errorCallback) === 'function') { 
                    errorCallback(response);
                }
                return;
            }
            
            if(response.message){
                ui.message(response.message);
            }
            
            if (typeof(successCallback) === 'function') { 
                successCallback(response);
            }
        });
    };

    ns.getAction = function(route, routeData, successCallback, errorCallback){

        var url = Routing.generate(route, routeData);

        $.get(url, function(response){
            if(!response.success){
                ui.error("ERROR!: " + response.message);
                if (typeof(errorCallback) === 'function') {
                    errorCallback(response);
                }
                return;
            }

            if(response.message){
                ui.message(response.message);
            }

            if (typeof(successCallback) === 'function') {
                successCallback(response);
            }
        });
    };
    
    ns.navigate = function (route, data){
        var url = Routing.generate(route, data);
        
        window.location = url;
    }
    
    //return object
    return ns;
    
}(jQuery, LCS.UI));