<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevas Ofertas SENA</title>
    <style>
        body {
          font-family: Arial, sans-serif;
          background-color: #f2f2f2;
        }
    
        .container {
          max-width: 400px;
          margin: 0 auto;
          padding: 20px;
          background-color: #ffffff;
          border-radius: 5px;
          box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
    
        h2 {
          text-align: center;
        }
    
        label,
        input {
          display: block;
          width: 100%;
          margin-bottom: 10px;
        }
    
        input[type="submit"] {
          background-color: #4caf50;
          color: #ffffff;
          padding: 10px;
          border: none;
          cursor: pointer;
        }
    
        input[type="submit"]:hover {
          background-color: #45a049;
        }
    
        .reset-password-link {
          text-align: center;
          margin-top: 10px;
        }
      </style>
</head>
<body>
    <header class="title">
        <h1>Programas de formacion</h1>
    </header>
    <?php echo $__env->make('partials/menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('contenido'); ?>
</body>
</html>         <?php /**PATH C:\laragon\www\empresatt\resources\views/index.blade.php ENDPATH**/ ?>