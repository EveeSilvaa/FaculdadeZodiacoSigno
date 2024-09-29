<?php include('layouts/header.php'); ?>

<div class="container mt-5">
<h1>Quer descobrir seu signo?</h1>

<form id="signo-form" method="POST" action="show_zodiac_sign.php">

      <div class="mb-3">
      <label for="data_nascimento" class="form-label">Digite sua data de Nascimento.</label><br>
      <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required></div>
      <button type="submit" class="btn btn-primary">Descobrir Signo</button>
</form>


</div>
<?php include('layouts/footer.php'); ?>