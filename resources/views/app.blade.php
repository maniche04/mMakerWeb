<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">

        <!--AngularJS-->
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.12/angular.min.js"></script>
        <script src="js/app.js"></script>
        <link href="{{ asset('sui/semantic.min.css') }}" rel="stylesheet" type="text/css" >
        <script type="text/javascript" src = "http://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src = "{{ asset('sui/semantic.min.js') }}"></script>

        <!-- Styles -->
        <style>
            html, body {
                font-family: 'PT Sans', sans-serif;
                margin:2px;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .posscore {
                color:green;
            }

            .negscore {
                color:red;
            }

            .ui.logo.image {
                width: 60px;
                height: auto;
            }

            .clickable {
                cursor:pointer;
            }

        </style>
    </head>
    <body>
        <div ng-app="mMaker" ng-controller="newsArticleController">
            <h1 class = 'ui medium teal header'>News Articles</h1>
            <div class = 'ui search fluid input'>
                <input type="text" placeholder="Search any article" ng-model="searchArticle">
            </div>
            <div class = 'ui divider'></div>
            <div class="row">
                <div>
                    <table class = 'ui table'>
                        <tr ng-click="loadArticle(article)" ng-class = "{'positive': article.score > 0, 'negative': article.score < 0}" ng-repeat='article in articles | filter:searchArticle'>
                            <td class = 'center aligned'><img class = 'ui mini centered image' src='<% article.source.imageurl %>'></td>
                            <td><% article.title %></td>
                            <td><% article.pubDate %></td>
                            <td ><% article.score %></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="ui modal">
              <i class="close icon"></i>
              <div class="header">
                <div class = 'ui grid'>
                    <div class = 'ui twelve wide column'>
                        <% singleview.title %>
                    </div>
                    <div class = 'ui two wide center aligned column' ng-class = "{'posscore': singleview.score > 0, 'negscore': singleview.score < 0}">
                        <% singleview.score %>
                    </div>
                    <div class = 'ui two wide right aligned column'>
                        <img class = 'ui logo centered image' src = '<% singleview.source.imageurl %>'>
                    </div>
                </div>
              </div>
              <div class="image content">
                <div class="ui medium image">
                  <img src="<% singleview.image %>">
                </div>
              </div>
                <div class="content" style="text-overflow:scroll;text-align:justify;width:100%" ng-bind-html="singleview.body | unsafe">
                  
                </div>
            </div>
        </div>

    </body>
</html>
