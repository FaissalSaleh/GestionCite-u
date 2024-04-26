<style type="text/css">
	.modal-container {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    z-index: 999;
    display: flex;
    justify-content: center;
    align-items: center;
}

.modal {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    max-width: 80%;
    max-height: 80%;
    overflow: auto;
}

button {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

</style>

<div class="modal-container" id="modal">
    <div class="modal">
        <h2>Modal Content</h2>
        <p>This is a modal window. Click outside this modal to close.</p>
    </div>
</div>