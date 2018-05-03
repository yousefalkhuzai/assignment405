<head>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="topnav">
  <a href="#">Home</a>
  <a href="#">Community</a>
  <a href="#">Contact</a>
</div>
 
  <?php
       require_once('./connect.php');
       require ('./getbook.php');
    ?>
<ul>
 <h5>Sort By</h5>
	<select id="sort-option">
      <option value="rating">Rating</option>
      <option value="reviews">Reviews</option>
       <option value="Date">Date</option>
         </select>
         </ul>
          
     <div id = "books" >
     
    
	<ul id="bookslist">
	  <?php get_all_todos() ?>
	</ul>
	
   </div>
   <script type="text/javascript" src="script.js"></script>
</body>