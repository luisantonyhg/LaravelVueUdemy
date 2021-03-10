<template>
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <div class="m-0 text-dark">usuario</div>
        </div>
      </div>
    </div>
    <div class="content container-fluid">
      <div class="card">
        <div class="card-header">
          <div class="card-tools">
            <!-- ESTO ES PARA USAR LAS ROUTAS -->
            <router-link class="btn btn-info btn-sm" :to="'/'">
              <i class="fas fa-plus-square"></i>Nuevo Usuario
            </router-link>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="container-fluid">
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">CRITERIOS DE BUSQUEDA</h3>
            </div>
            <div class="card-body">
              <form role="form">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" >NOMBRE</label>
                      <input type="text" class="form-control"  v-model="fillBsqUsuario.cNombre"/>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">USUARIO</label>
                      <input type="text" class="form-control" v-model="fillBsqUsuario.cUsuario"/>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label"
                        >CORREO ELECTRONICO</label
                      >
                      <input type="email" class="form-control" v-model="fillBsqUsuario.cCorreo"/>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label el-select">ESTADO</label>
                      <el-select v-model="fillBsqUsuario.cEstado" placeholder="seleccione" clearable>
                        <el-option
                          v-for="item in listEstados"
                          :key="item.value"
                          :label="item.label"
                          :value="item.value"
                        >
                        </el-option>
                      </el-select>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="card-footer">
        <div class="row">
          <div class="col-md-4 offset-4">
            <button class="btn btn-flat btn-info btnWidth" @click.prevent="getListUsuarios">BUSCAR</button>
            <button class="btn btn-flat btn-default btnWidth" @click.prevent="limpiarCriterios">LIMPIAR</button>
          </div>
        </div>
      </div>
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">BANDEJA DE RESULTADO</h3>
        </div>

        <div class="card-body table-responsive">
          <table
            class="table table-hover table-head-fixed text-nowrap projects"
          >
            <thead>
              <tr>
                <th>FOTOGRAFIA</th>
                <th>NOMBRE</th>
                <th>CORREO</th>
                <th>USUARIO</th>
                <th>ESTADO</th>
                <th>ACCCIONES</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <img src="" alt="" />
                </td>
                <td>JUAN ANTO</td>
                <td>correo@asdasdasdas.com</td>
                <td>Juan123</td>
                <td>
                  <span class="badge badge-success">ACTIVO</span>
                </td>
                <td>
                  <button class="btn btn-primary btn-sm" :to="'/'">
                    <i class="fas fa-folder"></i>VER
                  </button>
                  <button class="btn btn-info btn-sm" :to="'/'">
                    <i class="fas fa-pencil-alt"></i>EDITAR
                  </button>
                  <button class="btn btn-primary btn-sm" :to="'/'">
                    <i class="fas fa-key"></i>PERMISO
                  </button>
                  <button class="btn btn-danger btn-sm" :to="'/'">
                    <i class="fas fa-trash"></i>DESACTIVAR
                  </button>
                  <button class="btn btn-success btn-sm" :to="'/'">
                    <i class="fas fa-check"></i>ACTIVAR
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
              <li class="page-item">
                <a href="#" class="page-link">Anterior</a>
              </li>
              <li class="page-item active">
                <a href="#" class="page-link">1</a>
              </li>
              <li class="page-item">
                <a href="#" class="page-link">Post</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>


<script>
export default {
  data() {
    return {
      fillBsqUsuario: {
        cNombre: "",
        cUsuario: "",
        cCorreo: "",
        cEstado: "",
      },
      listUsuarios: [],
      listEstados: [
        { value: "A", label: "Activo" },
        { value: "I", label: "Inactivo" },
      ]
    };
  },
  methods:{
      limpiarCriterios(){
          this.fillBsqUsuario.cNombre = '';
          this.fillBsqUsuario.cUsuario = '';
          this.fillBsqUsuario.cCorreo = '';
          this.fillBsqUsuario.cEstado = '';
      },
      limpiarBandejaUsuario(){
        this.listUsuarios = [];
      },
      getListUsuarios(){
          var url = '/administracion/usuario/getListUsuarios'
          axios.get(url,{
              params: {
                  'cNombre' : this.fillBsqUsuario.cNombre,
                  'cUsuario' : this.fillBsqUsuario.cUsuario,
                  'cCorreo': this.fillBsqUsuario.cCorreo,
                  'cEstado': this.fillBsqUsuario.cEstado,
              }
          }).then(response =>{
              console.log(response);
          })
      }
  }
};
</script>