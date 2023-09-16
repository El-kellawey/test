<?php include('includes/header.php'); ?>

<div class="search">
<label for="exampleDataList" class="form-label"></label>
<input class="form-control"  list="datalistOptions" id="exampleDataList" placeholder="Search here what you need...">
<datalist id="datalistOptions">
  <option value="Men">
  <option value="Women">
  <option value="Kids"> 
  <option value="Explicabo Quia">
  <option value="Hic Ipsum">
</datalist>
</div>

<div class="navbar">
  <div class="logo">
      <h1><span>Fashion</span></h1>
  </div>
    <ul class="list">
        <li><a class="link" href="index.php">Home</a></li>
        <li><a class="link" href="men.php">Men</a></li>
        <li><a class="link" href="women.php">Women</a></li>
        <li><a class="link" href="kids.php">Kids</a></li>
        <li><a class="link" href="explicabo.php">Explicabo Quia</a></li>
        <li><a class="link" href="hic.php">Hic Ipsum</a></li>
    </ul>
</div>

</body>

<style scoped>

.form-control{
  width: 40%;
  margin: auto;
  border-radius: 20px;
  font-size: 2.2vh;
  margin-bottom: 4vh;
}

/* NAVBAR */

.navbar{
    display: flex;
    position: sticky;
    top: 0;
    background-color:black;
    z-index: 55555;
    padding: 0 5vh 0 5vh;
}
.navbar .logo span{
  color: #e11299;
  font-size: 5vh;
  font-weight: 900;
  cursor: none;
  font-family: 'Parisienne', cursive;
}
.navbar .logo:hover span{
  display: inline-block;
  transform:rotateY(360deg);
  transition: 4s;
  cursor: none;
}
li{
  list-style: none;
}
.link{
  text-decoration: none;
  color: white;
}
.navbar .list{
    display: flex;
    align-items: center;
    margin-top: 2vh;
    font-weight: bold;
}
.list a{
  /* color: red; */
  /* border-radius: .5vh; */
  padding:10px 15px;
  transition: .5s;
}
.list a:hover{
  content: "";
  border-bottom:  solid #e11299;
  /* border-radius: .5vh; */
  color: #e11299;
  transition: .5vh;
}
</style>