<!DOCTYPE HTML>
<html lang="en">
<head>
    <style>
        /* The grid: Four equal columns that floats next to each other */
.columngi {
    float: left;
    width: 25%;
    padding: 10px;
  }
  
.imgi {
    width:100%;
    max-width:600px;
    border-radius: 5%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
}

  /* Style the images inside the grid */
  .columngi img {
    opacity: 0.8;
    cursor: pointer;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    
  }
  
  .columngi img:hover {
    opacity: 1;
    transform: scale(1.2);
  }
  
  /* Clear floats after the columns */
  #rowgi:after {
    content: "";
    display: table;
    clear: both;
  }
  
  /* The expanding image container (positioning is needed to position the close button and the text) */
  .containergi {
    position: relative;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    
  }
  
  /* Expanding image text */
  #imgtextgi {
    position: absolute;
    bottom: 15px;
    left: 15px;
    color: white;
    font-size: 20px;
  }
  
  #expandedImggi {
    border-radius: 5%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    margin-left: 25px;
    margin-bottom: 20px;
  }
  /* Closable button inside the image */
  .closebtngi {
    position: absolute;
    top: 10px;
    right: 15px;
    color: white;
    font-size: 35px;
    cursor: pointer;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
  }
  




  select {
  appearance: none;
  background-color: transparent;
  border: none;
  padding: 0 1em 0 0;
  margin: 0;
  width: 100%;
  font-family: inherit;
  font-size: inherit;
  cursor: inherit;
  line-height: inherit;
}





.selec-border {
  border: 2px solid #90a4ae;
  border-radius: 7px;
  width: fit-content;
  margin-left: 20px;

}





















/*//////////////////////////////////////////////////////////////////////////*********************************************** */


  /* Style the Image Used to Trigger the Modal */
#expandedImggi {
  border-radius: 5px;
  cursor: zoom-in;
  transition: 0.3s;
}

#expandedImggi:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (Image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image (Image Text) - Same Width as the Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation - Zoom in the Modal */
.modal-content, #caption {
  animation-name: zoom;
  animation-duration: 0.6s;
}

@keyframes zoom {
  from {transform:scale(0)}
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
















    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title') - {{ config('app.name') }}</title>
    @include('site.partials.styles')
</head>
<body>
@include('site.partials.header')
@yield('content')
@include('site.partials.footer')
@include('site.partials.scripts')
</body>
</html>



















