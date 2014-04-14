//App.Views.App({ collection: App.appointments });
/*
| ----------------------------------------------------------------
|  Gobal App View
| ----------------------------------------------------------------
 */
App.Views.App = Backbone.View.extend({
    initialize : function(){
        console.log(this.collection.toJSON());
    }

})