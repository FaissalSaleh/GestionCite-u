<style type="text/css">
	.search-container {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 999;
    display: none;
}

#search-form {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    display: flex;
    align-items: center;
}

#search-input {
    flex: 1;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

#search-form button {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    margin-left: 10px;
    cursor: pointer;
}
</style>

<div class="search-container">
    <form id="search-form">
        <input type="text" id="search-input" placeholder="Search...">
        <button type="submit">Search</button>
    </form>
</div>