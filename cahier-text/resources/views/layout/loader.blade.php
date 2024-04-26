<style type="text/css">
#loader {
  border: 4px solid rgba(0, 0, 0, 0.1);
  border-left-color: #0c4a55;
  animation: spin 1s linear infinite;
  border-radius: 50%;
  width: 150px;
  height: 150px;
  position: absolute;
  top: 350px;
  left:650px;
  z-index: 1000;
}

@keyframes #loader {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
<div id="loader" style="display:none;"></div>