<footer id="footer" class="footer">
    <div class="contenedor">

        <div class="nav-footer">
            <h2 class="text-warning" style="padding-top: 35px;">Encontranos en:</h2>
            <a title="Visitame en Instagram." href="https://www.instagram.com/castroelsucio/" target="_blank">
                <i class="fab fa-instagram fa-3x text-warning" style="padding-right: 1rem;"></i>
            </a>
            <a title="Contáctame por whatsapp." href="https://api.whatsapp.com/send?phone=543413472558&text=¿En que podemos asesorarte?" target="_blank">
                <i class="fab fa-whatsapp fa-3x text-warning" style="padding-left: 1rem;"></i>
            </a>
            <a title="Invitame con un cafecito, gracias." href="https://cafecito.app/celsucio" target="_blank">
                <i class="fas fa-coffee fa-3x text-warning" style="padding-left: 1rem;"></i>
            </a>
        </div>

    </div>
    </div>
</footer>
<a href="#footer" class="btn-flotante text-warning">Nosotros</a>

<script>
    const btnFlotante = document.querySelector('.btn-flotante');
    btnFlotante.addEventListener('click', function() {
        const footer = document.querySelector('.footer');
        if (footer.classList.contains('activo')) {
            footer.classList.remove('activo');
            this.innerText = 'Nosotros';
        } else {
            footer.classList.add('activo');
            this.innerText = 'X Cerrar';
        }
    });
</script>


</body>

</html>