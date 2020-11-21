<?php
include_once "../header.php";
?>
<link rel="stylesheet" href="login.css">
<div data-layer="5e5d408f-1f23-417d-944d-2a258fdda2d8" class="login">
    <a href="../index.php">
        <div data-layer="558befb5-7dbd-40c2-b3dd-02dc8687fd64" class="panaderia"><span class="panaderia-0">Pana</span><span class="panaderia-4">dería</span></div>
    </a>
    <div data-layer="d4314492-94a5-46d5-9f35-4cab3eb4bc20" class="rectangle65"></div>
    <div data-layer="1767f260-433c-43ce-8f28-63d4b15b78fc" class="rectangle66"></div>
    <div data-layer="06531231-f594-480c-8f14-a084adcdd878" class="group66">

        <button id="search-button">
            <svg data-layer="00baf8cb-1b3e-4ab2-8cd1-a2c375fa7bbf" preserveAspectRatio="none" viewBox="6474.75 6996.75 44.234375 44.234375" class="path6bbe4dd08">
                <path d="M 6480 7002 L 6513.734375 7035.734375" /></svg>
            <svg data-layer="e94881da-8c9c-4194-9fbf-b047ae3cc49d" preserveAspectRatio="none" viewBox="6474.75 6996.75 44.234375 44.234375" class="path721ab38d3">
                <path d="M 6480 7002 L 6513.734375 7035.734375" /></svg>
        </button>

    </div>
    <input style="font-size: 30px; font-family: productsans_bold, Arial; letter-spacing: 0.40px; opacity: 0.44999998807907104; text-align: center;" type="text" data-layer="44183c94-b00f-4741-bd2f-d8549d652ef8" id="fname" name="fname" placeholder="Usuario" class="rectangle67">
    <input style="font-size: 30px; font-family: productsans_bold, Arial; letter-spacing: 0.40px; opacity: 0.44999998807907104; text-align: center;" type="password" data-layer="8c878c1b-4482-400b-ae23-6b3af642dfd8" id="fname2" name="fname2" placeholder="Contraseña" class="rectangle68">
    <div data-layer="2d01ff74-98eb-4cf4-9ab3-e3cf2183e2f8" class="inicioDeSesion">INICIO DE SESIÓN</div>
    <div data-layer="6b093831-991a-4a6a-8165-cc3761758fe5" class="group67">
        <input style="cursor: pointer;" type="button" data-layer="d7bda142-2d80-4bc7-af11-5144d7b044b2" class="rectangle696c5d74dc">
        <div data-layer="1686f944-16be-4f24-a8a9-4919b6cf1aff" class="iniciarSesion">INICIAR SESIÓN</div>
    </div>
    <div data-layer="1ab41ea4-697b-4eee-87e3-6226c8220721" class="group68">
        <input style="cursor: pointer;" type="button" data-layer="2dc2421e-9a52-4770-a3ee-9243f2f48eac" class="rectangle70">
        <a href="../signup/signup.php"> <div data-layer="6c3c7961-2408-43e4-91ef-ba975b73e51b" class="olvidoSuContrasena"> Ir a Registro </div> </a>
    </div>
    <input type="checkbox" id="check1" name="check" data-layer="51ce48b0-6062-4076-8fe9-2aa2a312fa40" preserveAspectRatio="none" viewBox="128 128 36 36" class="checkSquare6f9a204f">
    <div data-layer="3c377087-1a7a-4747-bf82-94933ef29912" class="recordarMiContrasena">Recordar mi contraseña</div>

    <!--
    <div data-layer="de14f8b3-fa9d-4e7d-84c8-32d6649b2e16" class="rectangle71"></div>
    <div data-layer="d65a2ba4-d40f-4edb-98c8-f0445fd3ff6f" class="rectangle72"></div>
    <div data-layer="1109652e-272c-49a8-b4a2-718cb30309eb" class="group69">
        <button id="search-button">
            <svg data-layer="c94832ec-b3b5-46e8-8ea2-78f73e742c3a" preserveAspectRatio="none" viewBox="6474.75 6996.75 44.234375 44.234375" class="path6">
                <path d="M 6480 7002 L 6513.734375 7035.734375" /></svg>
            <svg data-layer="1e181fa4-ae76-4c4b-925d-79ff6cb81399" preserveAspectRatio="none" viewBox="6474.75 6996.75 44.234375 44.234375" class="path7">
                <path d="M 6480 7002 L 6513.734375 7035.734375" /></svg>
        </button>

    </div>
    <input style="font-size: 30px; font-family: productsans_bold, Arial; letter-spacing: 0.40px; opacity: 0.44999998807907104; text-align: center;" type="text" data-layer="b641adec-7b0e-4bce-8a99-6da725645e31" id="fname3" name="fname3" placeholder="Usuario" class="rectangle73">
    <input style="font-size: 30px; font-family: productsans_bold, Arial; letter-spacing: 0.40px; opacity: 0.44999998807907104; text-align: center;" type="text" data-layer="541944c8-8d2b-4e43-884f-f38862a9b90f" id="fname3" name="fname3" placeholder="Email" class="rectangle74">
    <div data-layer="bffe537a-c393-46dc-9453-4527ab6213e1" class="registro">REGISTRO</div>
    <div data-layer="bd60707f-3e75-4a35-a97d-28310e8ad1a2" class="group70">
        <input style="cursor: pointer;" type="button" data-layer="c94e485c-1038-4c1c-afd7-6d596beceac9" class="rectangle69">
        <div data-layer="d703a5fd-334b-425d-b235-9e72c85308f0" class="registrarse">REGISTRARSE</div>
    </div>
    <input style="font-size: 30px; font-family: productsans_bold, Arial; letter-spacing: 0.40px; opacity: 0.44999998807907104; text-align: center;" type="password" data-layer="f81f2cc6-2458-4593-afb2-14790f649403" id="fname3" name="fname3" placeholder="Contraseña" class="rectangle75">
    <input style="font-size: 30px; font-family: productsans_bold, Arial; letter-spacing: 0.40px; opacity: 0.44999998807907104; text-align: center;" type="password" data-layer="a8aa9282-e021-4f2c-a0af-57d0cec7da35" id="fname3" name="fname3" placeholder="Repetir Contraseña" class="rectangle76">
    <input type="checkbox" id="check2" name="check2" data-layer="6525e32f-11b4-4780-b158-e432ddb26574" preserveAspectRatio="none" viewBox="128 128 36 36" class="checkSquare">
    <div data-layer="a792f18d-7385-4ba8-bbac-18047e731fda" class="yoAceptoLosTerminosCondiciones"><span class="yoAceptoLosTerminosCondiciones-0">Yo acepto los </span><span class="yoAceptoLosTerminosCondiciones-14">Términos & Condiciones </span></div>
    <svg data-layer="6760d0fb-657a-439f-8aec-f28cad1294e1" preserveAspectRatio="none" viewBox="0 -0.5 812 1" class="line6">
        <path d="M 0 0 L 812 0" /></svg>
-->
</div>


<?php
include_once "../footer.php";
?>