var script = directory_uri.dirPath + '/resources/scripts/route/';

var theme = {

    // Global Call Script
    common: {
        init: () => {
            jQuery.getScript( script + 'common.js' );
        }
    },

    home: {
        finalize: () => {
            jQuery.getScript( script + 'home.js' );
        }
    },

}

var UTIL = {
    
    fire: ( func, funcname, args ) => {


        var namespace = theme
        funcname = funcname === undefined ? 'init' : funcname

        var fired = func !== ''
        fired = fired && namespace[func]
        fired = fired && typeof namespace[func][funcname] === 'function'

        if ( fired ) {
            namespace[func][funcname](args)
        }

    },

    loadEvents: () => {
        //* Fire common init JS
        UTIL.fire( 'common' )
        //* Fire page-specific init JS, and then finalize JS
        jQuery.each( document.body.className.replace(/-/g, '_').split(/\s+/), ( i, classnm ) => {
            UTIL.fire(classnm)
            UTIL.fire(classnm, 'finalize')
        } )
        //* Fire common finalize JS
        UTIL.fire( 'common', 'finalize' )
    }

}

//* Load Events
jQuery(document).ready(UTIL.loadEvents)


// Add event listener offline to detect network loss.
window.addEventListener('offline', (e) => {
  showPopForOfflineConnection()
})

// Add event listener online to detect network recovery.
window.addEventListener('online', (e) => {
  hidePopAfterOnlineInternetConnection()
})

function hidePopAfterOnlineInternetConnection() {
  // Set your alert here...
}

function showPopForOfflineConnection() {
  alert("Ooppss! There's something wrong about your internet. Please check!")
}
