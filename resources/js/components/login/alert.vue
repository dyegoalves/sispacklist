<script>
export default {
  props: ["errormesagem"]
};
</script>

<style>
/* Efeito de Fad in e Out */
#alertAppDiv {
  color: #fff;
  opacity: 0;
  animation: anima 5s ease infinite;
}
@keyframes anima {
  to {
    opacity: 1;
  }
}

#alertlogin:link {
  text-decoration: none;
}

/* //Rescrevendo */
#loginpage .alert .close {
  color: #fff;
  opacity: 0.5;
  filter: alpha(opacity=20);
}
</style>

<template>
  <div id="alertAppDiv" class="alert alert-danger">
    <a id="alertlogin" href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{ errormesagem }}
  </div>
</template>
