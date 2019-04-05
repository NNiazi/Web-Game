
                var ranking = [];

                function saveUserScore() {

                    for (var i = 0; localStorage.length; i++) {
                      
                      var key = localStorage.key(i);

                      console.log(key);

                      if (key != "loggedInUserName"){


                        var user = JSON.parse(localStorage.getItem(key));

                        var username = {name: "", score: ""};
                        username.name = user.username;
                        username.score = user.userScore;

                        ranking.push(username);

                        // console.log(ranking);
                      }
                    }

                    /*var userObj = [];
                    var html = "<table>"
                    var key = localStorage.key
                    var userScore = localStorage.userScore
                        for (var key in localStorage){

                        // var key = localStorage.key[i];
                        if(key !== "loggedInUserName"){
                                html += "<tr><td>" + key + "</td>";
                                html += "<td>" + userScore + "</td></tr>";
}}
html += "</table>"

document.getElementById("scoreLeader").innerHTML = html;}
                        // var user = JSON.parse(localStorage.getItem(key));

                        // var username = {name: "", scores: ""};

        //                 username.name = userObj.userName;
        //                 username.scores = userObj.userScore;
                        
        //                 ranking.push(username);
        //             }
        //         function drawTable() {
        //             var htmlStr = "<table>";
        //             for(var key in localStorage){
        //                 htmlStr += "<tr><td>" + ranking[i].name + "</td>";
        //                 htmlStr += "<td>" + ranking[i].userScore + "</td></tr>";
        //             }

        //     //Finish off the HTML string.
        //     htmlStr += "</table>";

        //     //Add HTML string to the page
        //     document.getElementById("scoreLeader").innerHTML = htmlStr;
        // }*/

