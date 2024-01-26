<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
     <style>
      table {
        border-collapse: collapse;
      }
      td {
        border: solid 1px black;
        padding: 3px;
      }
    </style>
 </head>
 <body>
  <div>aibjfab</div>
  <div>
  <table>
    <!-- 各段を繰り返し出力 -->
    <?php for($i = 1; $i <= 9; $i++){ ?>
      <tr>
        <!-- 各段の一つ一つのマスを繰り返し出力 -->
        <?php for($j = 1; $j <= 9; $j++){ ?>
          <td><?php echo $i; ?> * <?php echo $j; ?> = <?php echo $i * $j; ?></td>
        <?php } ?>
      </tr>
    <?php } ?>
  </table>

  </div>
 </body>
 
 </html>