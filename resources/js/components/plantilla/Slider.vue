<template>
    <div>
         <aside class="main-sidebar sidebar-dark-primary elevation-4">
   
    <a href="../../index3.html" class="brand-link">
      <img :src="ruta + '/img/AdminLTELogo.png'" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Sistema de Laravel y Vue</span>
    </a>

    
    <div class="sidebar">
      
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img :src="ruta + '/img/avatar.png'" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Huamani Gonzales</a>
        </div>
      </div>

   
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        
          <li class="nav-item has-treeview menu-open">
            <router-link class="nav-link active" :to="'/'">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
          </router-link>
          </li>
          
          <li class="nav-header">OPERACIONES</li>

          <li class="nav-item">
            <router-link class="nav-link" :to="'/pedido'">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Pedido
                <span class="badge badge-info right">2</span>
              </p>
         </router-link>
          </li>
          
              
          <li class="nav-header">CONFIGURACION</li>

          <li class="nav-item">
            <router-link class="nav-link" :to="'/categoria'">
              <i class="nav-icon fas fa-sitemap"></i>
              <p>Categorias</p>
        </router-link>
          </li>

          <li class="nav-item">
             <router-link class="nav-link" :to="'/producto'">
              <i class="nav-icon fas fa-apple-alt"></i>
              <p>Productos</p>
         </router-link>
          </li>

          <li class="nav-header">ADMINISTRACION</li>
          <li class="nav-item">
            <router-link class="nav-link" :to="'/usuario'">
              <i class="nav-icon fas fa-users"></i>
              <p>Usuarios</p>
          </router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" :to="'/rol'">
              <i class="nav-icon fas fa-unlock-alt"></i>
              <p>
                Roles
            
              </p>
         </router-link>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link class="nav-link" :to="'/permiso'">
                  <i class="nav-icon fas fa-key"></i>
                  <p>Permisos</p>
               </router-link>
              </li>
            </ul>
          </li>
        

          <li class="nav-header">REPORTES</li>
          <li class="nav-item">
           <router-link class="nav-link" :to="'/pedido'">
              <i class="nav-icon fas fa-file-export"></i>
              <p class="text">Pedidos</p>
           </router-link>
          </li>
        </ul>
      </nav>
 
    </div>

  </aside>
    </div>
</template>

<script>
export default {
  props: ['ruta']
    
}
</script>