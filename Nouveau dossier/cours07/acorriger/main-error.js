$(function() {
    
    var users = {},
        
        ul = $("#friends"), //4 objet
        select = $("#users");//user->users
    /*
        Fonction de la recherche d'un utilisateur par son id
    */
    function search(data) {  
        for (var i=0 ; i < users.length ; i++) {
              if (users[i]._id == data) { 
                  return users[i]; // 5 le return                
              }
        }
    }
    
     /*
       Récupération des amis d'un utilisateur
    */
      function getFriends(user){
          return user.friends;
      }
        //2 C'est une fonction
    

    /*
        Requête Ajax appel au json pour recuperer les donnees
    */
    $.get("data.json", function(json) { //3 remettre json dans la fonction
       
        var option;
        for (var i=0 ; i < json.length ; i++) {
            option = $("<option>"); //7 ne pas oublier de creer les crochets
            option.val(json[i]._id); //8 _id
            option.text(json[i].name);
            select.append(option);
        }
         
        users = json; 
        select.change();
      }); // 1 Manque cotte ici
      
    
        
   
    
     /*
       Au changement dans la liste déroulante
    */
    $("body").on("change", "#users", function() {
       
        var user = search($(this).val());
        var li;
        var friends = getFriends(user);
        
        $("#username").text(user.name);
        
        ul.empty();

        for (var i=0 ; i < friends.length ; i++) { //6 i++
             li = $("<li>");
             li.text(friends[i].name); //10 Rajouter l'indice [i]
             ul.append(li);
        }
        
    });
   
});