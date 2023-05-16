<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan form 2</title>
</head>
<body>
    
    <form name="Latihan" method="POST" onsubmit="return checkform(this)">
        <div>
            NIM
            <input type="text" name="txNIM" id="txNIM">
        </div>
        <div>
            Jenis Kelamin
            <input type="radio" name="txJK" id="txJK" value="L">Laki-Laki
            <input type="radio" name="txJK" id="txJK" value="P">Perempuan
        </div>
        <div>
            Jurusan
            <select name="txJURUSAN" id="txJURUSAN">
                <option value="MTI">MTI</options>
                <option value="KAB">KAB</options>
                <option value="DSN">Desain</options>
            </select>
        </div>
        <div>
            Hobi
            <input type="checkbox" name="txhobibola" id="txhobibola" value="1">Sepak Bola
            <input type="checkbox" name="txhobibulutangkis" id="txhobibulutangkis" value="1">Bulu Tangkis
            <input type="checkbox" name="txhobivoly" id="txhobivoly" value="1">Bola Voly
            <input type="checkbox" name="txhobitaekwondo" id="txhobitaekwondo" value="1">Taekwondo
            <input type="checkbox" name="txhobikarate" id="txhobikarate" value="1">Karate
        </div>
        <div>
            <button type="submit"> Kirim Data </button>
        </div>


    </form>

    <script type="text/Javascript">
        function checkform(frm){
            let form = frm.elements;
            let NIM = form.namedItem("txNIM").value;
            let jnkel = form.namedItem("txJK").value;
            let jur = form.namedItem("txJURUSAN").value;
            let hobi = [
                form.namedItem("txhobibola").checked,
                form.namedItem("txhobibulutangkis").checked,
                form.namedItem("txhobivoly").checked,
                form.namedItem("txhobitaekwondo").checked,
                form.namedItem("txhobikarate").checked,
            ];

            
            console.log("NIM: "+NIM);
            console.log("Jenis Kelamin: "+jnkel);
            console.log("Jurusan: "+jur);
            console.log("Hobi: "+hobi);

            return false;
        }
    </script> 

</body>
</html>