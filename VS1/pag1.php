<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body{
        font-family: Arial, Helvetica, sans-serif;
        background-color: #f4f4f4;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .form-container{
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        width: 300px;
        display: flex;
        flex-direction: column;
        gap: 15px;
    }
    input[type="text"],input[type="email"],textarea{
        width: 100%;
        padding: 10px;
        border:1px solid #addd;
        border-radius: 4px;
        font-size: 14px;
    }
    button{
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 12px;
        font-size: 16px;
        cursor: pointer;
        border-radius: 4px;
        transition: background-color 0.3s ease;
    }
    button:hover{
        background-color: #45a049;
    }
</style>