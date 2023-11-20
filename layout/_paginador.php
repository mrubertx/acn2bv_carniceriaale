<div class='centrar-contenido'>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <?php if($paginado_enlaces['anterior']): ?>
                        <li class="page-item">
                            <a class="page-link" href="?pag=<?php echo $paginado_enlaces['primero'] ?>"> Primero </a>                        
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="?pag=<?php echo $paginado_enlaces['anterior'] ?>"> <?php echo $paginado_enlaces['anterior'] ?> </a>
                        </li>
                    <?php endif ?>
                    <li class="page-item active"> 
                        <span class="page-link">
                            <?php echo $paginado_enlaces['actual'] ?> 
                        </span>
                    </li>
                    <?php if($paginado_enlaces['siguiente']): ?>
                        <li class="page-item">
                            <a class="page-link" href="?pag=<?php echo $paginado_enlaces['siguiente'] ?>"> <?php echo $paginado_enlaces['siguiente'] ?> </a>
                        </li>
                        <li class="page-item">
                        <a class="page-link" href="?pag=<?php echo $paginado_enlaces['ultimo'] ?>"> Último </a>
                        </li>
                    <?php endif ?>
                </ul>
            </nav>
    </div>
    