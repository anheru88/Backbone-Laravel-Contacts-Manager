//App.Views.App({ collection: App.appointments });
/*
 | ----------------------------------------------------------------
 |  Gobal App View
 | ----------------------------------------------------------------
 */
App.Views.App = Backbone.View.extend({
    initialize : function(){
        var addContactView = new App.Views.AddContact({ collection : App.contacts });
        var allContactsView = new App.Views.Contacts({ collection : App.contacts }).render();
        $('#allContacts').append(allContactsView.el);
    }
});

/*
 | ----------------------------------------------------------------
 |  Add Contact View
 | ----------------------------------------------------------------
 */

App.Views.AddContact = Backbone.View.extend({
    el : '#addContact',
    events : {
        'submit' : 'addContact'
    },
    addContact  : function(e){
        e.preventDefault();
        var newContact =  this.collection.create({
            first_name : this.$('#first_name').val(),
            last_name : this.$('#last_name').val(),
            email_address : this.$('#email_address').val(),
            description : this.$('#description').val()
        }, { wait : true});
        //  console.log( this.collection );
        console.log( newContact );
    }
});

/*
 | ----------------------------------------------------------------
 |  All Contact View
 | ----------------------------------------------------------------
 */

App.Views.Contacts = Backbone.View.extend({
    tagName : 'tbody',
    render : function(){
       this.collection.each( this.addOne, this);
       return this;
    },
    addOne : function(contact){
        var contactView = new App.Views.Contact({ model : contact});
        this.$el.append(contactView.render().el);
    }
});

/*
 | ----------------------------------------------------------------
 |  Single Contact View
 | ----------------------------------------------------------------
 */

App.Views.Contact = Backbone.View.extend({
    tagName : 'tr',
    template : App.template('allContactsTemplate'),
    render : function(){
        this.$el.html( this.template( this.model.toJSON() ) );
        return this;
    }
});