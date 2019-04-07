<!-- mylo carson 2019-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Task</title>
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/light-theme.css">
</head>
<body>
    <div class="container-fluid">


        <div class="row">
            <img class="header-img" src="img/header.png">
        </div>

        <div class="row">
            
            <div class="col-md-3 d-flex flex-column align-items-center profile-section">
               

                <div>
                    
                    <ul class="menu-wrapper d-flex flex-column">
                        <a href="/Authentication/login.php"><li class="menu-item text-center">Login</li></a>
                        

                    </ul>
                </div>

                <div class="line"></div>

                <div>
                    
                    <ul class="menu-wrapper d-flex flex-column">
                        <a href="#"><li class="menu-item text-center">English (US)</li> </a>
                        <a href="#"><li class="menu-item text-center">Privacy</li> </a>
                        <a href="#"><li class="menu-item text-center">Terms of Use</li> </a>
                        <a href="#"><li class="menu-item text-center">Contact</li> </a>
                        <a href="#"><li class="menu-item text-center">Advertise with us</li> </a>

                    </ul>
                </div>

            </div>
            <div class="col-md-9">
                
                <!-- <div class=""> -->

                    <div class="row d-flex flex-column post-section">

                        <textarea class="post-input" type="text" name="post-input" placeholder="What’s happening?"></textarea>

                        <div class="row mx-0 d-flex flex-row mt-auto justify-content-between">
                            <div class="post-action-right">
                                <a class="post-action-item" href="#css"><img src="img/text.svg"></a>
                                <a class="post-action-item" href="#css"><img src="img/italic.svg"></a>
                                <a class="post-action-item" href="#css"><img src="img/link-in.svg"></a>
                                <a class="post-action-item" href="#css"><img src="img/underline.svg"></a>
                                <a class="post-action-item" href="#css"><img src="img/bold.svg"></a>
                            </div>

                            <div class="post-action-left">
                                <a class="post-action-item" href="#css"><img src="img/attachment.svg"></a>
                                <a class="post-action-item" href="#css"><img src="img/mic.svg"></a>
                                <a class="post-action-item" href="#css"><img src="img/link.svg"></a>
                                <button class="btn publish-btn post-action-item">Publish</button>
                            </div>
                            
                        </div>
                    </div>

                    <div class="row mx-0 d-flex flex-row align-items-center  justify-content-between">
                        <div class="col-md-8 line ml-md-5"></div>
                        <div class="col d-inline-flex mr-md-5 flex-row justify-content-between">
                            <p class="post-filter"><span class="post-filter-title">Sort by:</span> Most Recent Posts</p>
                            <img src="img/caret.svg">
                        </div>
                    </div>
                    
                    <div class="row mx-0 mt-md-4 blog-item-wrapper first-child">
                        <div class="d-flex flex-row px-0 blog-item">
                            <div class="blog-item-author-avatar-wrapper">
                                <img class="blog-item-author-avatar" src="img/avatar-2.jpeg">
                            </div>
                            <div class="blog-item-main d-flex flex-row">
                                <div class="blog-item-img-wrapper">
                                    <img class="blog-item-img" src="img/image-1.png">
                                </div>
                                <div class="d-flex flex-column blog-item-main-content">
                                     <div class="d-flex flex-row justify-content-between">
                                         <h2 class="blog-item-header text-left">This is my first Post</h2>
                                         <img src="img/star.svg">
                                     </div>
                                     <h6 class="blog-item-author text-left">Oluwa Trumpeter </h6>
                                     <p class="blog-item-content text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dgiat nuor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dgiat nulla pariatur ....</p>
                                     <div class="row d-flex flex-row align-items-center justify-content-between mx-0">
                                        <div class="d-flex flex-row align-items-center">
                                            <div class="blog-item-tag-wrapper">
                                                <p class="blog-item-tag text-center">Javascript</p>
                                            </div>
                                            <div class="blog-item-tag-wrapper">
                                                <p class="blog-item-tag text-center">Tech</p>
                                            </div>
                                            <div class="blog-item-tag-wrapper">
                                                <p class="blog-item-tag text-center">Hotels</p>
                                            </div>
                                            <a href="#"><p class="blog-item-more_action ">Read More</p></a>
                                        </div>

                                        <div class="d-flex flex-row align-items-center">
                                            <img class="blog-item-action" src="img/heart-filled.svg">
                                            <img class="blog-item-action" src="img/comment.svg">
                                        </div>
                                    </div>
                                    <p class="blog-item-date">3rd, April 2019 </p>
                                </div>
                            </div>
                        </div>
                        
                    </div>


                    <div class="row mx-0 blog-item-wrapper">
                        <div class="d-flex flex-row px-0 blog-item">
                            <div class="blog-item-author-avatar-wrapper">
                                <img class="blog-item-author-avatar" src="img/avatar-2.jpeg">
                            </div>
                            <div class="blog-item-main d-flex flex-row">
                                <div class="blog-item-img-wrapper">
                                    <img class="blog-item-img" src="img/image-1.png">
                                </div>
                                <div class="d-flex flex-column blog-item-main-content">
                                     <div class="d-flex flex-row justify-content-between">
                                         <h2 class="blog-item-header text-left">This is my first Post</h2>
                                         <img src="img/star.svg">
                                     </div>
                                     <h6 class="blog-item-author text-left">Oluwa Trumpeter </h6>
                                     <p class="blog-item-content text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dgiat nuor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dgiat nulla pariatur ....</p>
                                     <div class="row d-flex flex-row align-items-center justify-content-between mx-0">
                                        <div class="d-flex flex-row align-items-center">
                                            <div class="blog-item-tag-wrapper">
                                                <p class="blog-item-tag text-center">Javascript</p>
                                            </div>
                                            <div class="blog-item-tag-wrapper">
                                                <p class="blog-item-tag text-center">Tech</p>
                                            </div>
                                            <div class="blog-item-tag-wrapper">
                                                <p class="blog-item-tag text-center">Hotels</p>
                                            </div>
                                            <a href="#"><p class="blog-item-more_action ">Read More</p></a>
                                        </div>

                                        <div class="d-flex flex-row align-items-center">
                                            <img class="blog-item-action" src="img/heart-filled.svg">
                                            <img class="blog-item-action" src="img/comment.svg">
                                        </div>
                                    </div>
                                    <p class="blog-item-date">3rd, April 2019 </p>
                                </div>
                            </div>
                        </div>
                        
                    </div>


                    <div class="row mx-0 blog-item-wrapper">
                        <div class="d-flex flex-row px-0 blog-item">
                            <div class="blog-item-author-avatar-wrapper">
                                <img class="blog-item-author-avatar" src="img/avatar-2.jpeg">
                            </div>
                            <div class="blog-item-main d-flex flex-row">
                                <div class="blog-item-img-wrapper">
                                    <img class="blog-item-img" src="img/image-1.png">
                                </div>
                                <div class="d-flex flex-column blog-item-main-content">
                                     <div class="d-flex flex-row justify-content-between">
                                         <h2 class="blog-item-header text-left">This is my first Post</h2>
                                         <img src="img/star.svg">
                                     </div>
                                     <h6 class="blog-item-author text-left">Oluwa Trumpeter </h6>
                                     <p class="blog-item-content text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dgiat nuor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dgiat nulla pariatur ....</p>
                                     <div class="row d-flex flex-row align-items-center justify-content-between mx-0">
                                        <div class="d-flex flex-row align-items-center">
                                            <div class="blog-item-tag-wrapper">
                                                <p class="blog-item-tag text-center">Javascript</p>
                                            </div>
                                            <div class="blog-item-tag-wrapper">
                                                <p class="blog-item-tag text-center">Tech</p>
                                            </div>
                                            <div class="blog-item-tag-wrapper">
                                                <p class="blog-item-tag text-center">Hotels</p>
                                            </div>
                                            <a href="#"><p class="blog-item-more_action ">Read More</p></a>
                                        </div>

                                        <div class="d-flex flex-row align-items-center">
                                            <img class="blog-item-action" src="img/heart.svg">
                                            <img class="blog-item-action" src="img/comment.svg">
                                        </div>
                                    </div>
                                    <p class="blog-item-date">3rd, April 2019 </p>
                                </div>
                            </div>
                        </div>
                        
                    </div>


                    <div class="row mx-0 blog-item-wrapper">
                        <div class="d-flex flex-row px-0 blog-item">
                            <div class="blog-item-author-avatar-wrapper">
                                <img class="blog-item-author-avatar" src="img/avatar-2.jpeg">
                            </div>
                            <div class="blog-item-main d-flex flex-row">
                                <div class="blog-item-img-wrapper">
                                    <img class="blog-item-img" src="img/image-1.png">
                                </div>
                                <div class="d-flex flex-column blog-item-main-content">
                                     <div class="d-flex flex-row justify-content-between">
                                         <h2 class="blog-item-header text-left">This is my first Post</h2>
                                         <img src="img/star.svg">
                                     </div>
                                     <h6 class="blog-item-author text-left">Oluwa Trumpeter </h6>
                                     <p class="blog-item-content text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dgiat nuor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dgiat nulla pariatur ....</p>
                                     <div class="row d-flex flex-row align-items-center justify-content-between mx-0">
                                        <div class="d-flex flex-row align-items-center">
                                            <div class="blog-item-tag-wrapper">
                                                <p class="blog-item-tag text-center">Javascript</p>
                                            </div>
                                            <div class="blog-item-tag-wrapper">
                                                <p class="blog-item-tag text-center">Tech</p>
                                            </div>
                                            <div class="blog-item-tag-wrapper">
                                                <p class="blog-item-tag text-center">Hotels</p>
                                            </div>
                                            <a href="#"><p class="blog-item-more_action ">Read More</p></a>
                                        </div>

                                        <div class="d-flex flex-row align-items-center">
                                            <img class="blog-item-action" src="img/heart-filled.svg">
                                            <img class="blog-item-action" src="img/comment.svg">
                                        </div>
                                    </div>
                                    <p class="blog-item-date">3rd, April 2019 </p>
                                </div>
                            </div>
                        </div>
                        
                    </div>


                    <div class="row mx-0 blog-item-wrapper">
                        <div class="d-flex flex-row px-0 blog-item">
                            <div class="blog-item-author-avatar-wrapper">
                                <img class="blog-item-author-avatar" src="img/avatar-2.jpeg">
                            </div>
                            <div class="blog-item-main d-flex flex-row">
                                <div class="blog-item-img-wrapper">
                                    <img class="blog-item-img" src="img/image-1.png">
                                </div>
                                <div class="d-flex flex-column blog-item-main-content">
                                     <div class="d-flex flex-row justify-content-between">
                                         <h2 class="blog-item-header text-left">This is my first Post</h2>
                                         <img src="img/star.svg">
                                     </div>
                                     <h6 class="blog-item-author text-left">Oluwa Trumpeter </h6>
                                     <p class="blog-item-content text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dgiat nuor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dgiat nulla pariatur ....</p>
                                     <div class="row d-flex flex-row align-items-center justify-content-between mx-0">
                                        <div class="d-flex flex-row align-items-center">
                                            <div class="blog-item-tag-wrapper">
                                                <p class="blog-item-tag text-center">Javascript</p>
                                            </div>
                                            <div class="blog-item-tag-wrapper">
                                                <p class="blog-item-tag text-center">Tech</p>
                                            </div>
                                            <div class="blog-item-tag-wrapper">
                                                <p class="blog-item-tag text-center">Hotels</p>
                                            </div>
                                            <a href="#"><p class="blog-item-more_action ">Read More</p></a>
                                        </div>

                                        <div class="d-flex flex-row align-items-center">
                                            <img class="blog-item-action" src="img/heart.svg">
                                            <img class="blog-item-action" src="img/comment.svg">
                                        </div>
                                    </div>
                                    <p class="blog-item-date">3rd, April 2019 </p>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <div class="row mx-0 blog-item-wrapper">
                        <div class="d-flex flex-row px-0 blog-item">
                            <div class="blog-item-author-avatar-wrapper">
                                <img class="blog-item-author-avatar" src="img/avatar-2.jpeg">
                            </div>
                            <div class="blog-item-main d-flex flex-row">
                                <div class="blog-item-img-wrapper">
                                    <img class="blog-item-img" src="img/image-1.png">
                                </div>
                                <div class="d-flex flex-column blog-item-main-content">
                                     <div class="d-flex flex-row justify-content-between">
                                         <h2 class="blog-item-header text-left">This is my first Post</h2>
                                         <img src="img/star.svg">
                                     </div>
                                     <h6 class="blog-item-author text-left">Oluwa Trumpeter </h6>
                                     <p class="blog-item-content text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dgiat nuor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dgiat nulla pariatur ....</p>
                                     <div class="row d-flex flex-row align-items-center justify-content-between mx-0">
                                        <div class="d-flex flex-row align-items-center">
                                            <div class="blog-item-tag-wrapper">
                                                <p class="blog-item-tag text-center">Javascript</p>
                                            </div>
                                            <div class="blog-item-tag-wrapper">
                                                <p class="blog-item-tag text-center">Tech</p>
                                            </div>
                                            <div class="blog-item-tag-wrapper">
                                                <p class="blog-item-tag text-center">Hotels</p>
                                            </div>
                                            <a href="#"><p class="blog-item-more_action ">Read More</p></a>
                                        </div>

                                        <div class="d-flex flex-row align-items-center">
                                            <img class="blog-item-action" src="img/heart-filled.svg">
                                            <img class="blog-item-action" src="img/comment.svg">
                                        </div>
                                    </div>
                                    <p class="blog-item-date">3rd, April 2019 </p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                <!-- </div> -->
            </div>
        </div>

    </div>
</body>
</html>