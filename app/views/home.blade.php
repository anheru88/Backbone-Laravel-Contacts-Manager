<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Hands on Contacts</title>
</head>
<body>

<h1>Contacts</h1>

<script src="js/jquery.js"></script>
<script src="js/underscore.js"></script>
<script src="js/backbone.js"></script>
<script src="js/main.js"></script>
<script src="js/models.js"></script>
<script src="js/collections.js"></script>
<script src="js/views.js"></script>
<script src="js/router.js"></script>

<script>
    new App.Router;
    Backbone.history.start();

    App.contacts = new App.Collections.Contacts;
    App.contacts.fetch().fail(function(){
        new App.Views.App({ collection: App.contacts });
    });

</script>

</body>
</html>
