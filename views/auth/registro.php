<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Registrate en DevWebCamp</p>

    <form class="formulario">

        <div class="formulario__campo">
            <label for="nombre" class="formulario__label">Nombre</label>
            <input 
                type="text"
                class="formulario__input"
                placeholder="Tu nombre"
                id="nombre"
                name="nombre"            
            />
        </div>

        <div class="formulario__campo">
            <label for="apellidos" class="formulario__label">Apellidos</label>
            <input 
                type="text"
                class="formulario__input"
                placeholder="Tus apellidos"
                id="apellidos"
                name="apellidos"            
            />
        </div>

        <div class="formulario__campo">
            <label for="email" class="formulario__label">Email</label>
            <input 
                type="email"
                class="formulario__input"
                placeholder="Tu Email"
                id="email"
                name="email"            
            />
        </div>

        <div class="formulario__campo">
            <label for="password" class="formulario__label">Password</label>
            <input
                type="password"
                class="formulario__input"
                placeholder="Tu password"
                id="password"
                name="passsword"            
            />
        </div>

        <div class="formulario__campo">
            <label for="password2" class="formulario__label">Repetir Password</label>
            <input
                type="password"
                class="formulario__input"
                placeholder="Repetir password"
                id="password2"
                name="passsword2"            
            />
        </div>

        <input type="submit" Class="formulario__submit" value="Crear Cuenta">
    </form>

    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya tienes cuenta? Iniciar sesión</a>
        <a href="/olvide" class="acciones__enlace">¿Olvidaste tu password?</a>
    </div>
</main>