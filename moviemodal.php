<!-- Modal -->
<div id="moviemodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">About PStatus</h4>
      </div>
      <div class="modal-body">
        <p><?PHP echo $_GET['showmovie']; ?></p>
        <p><a href="https://github.com/danmed/PStatus">Github</a></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
