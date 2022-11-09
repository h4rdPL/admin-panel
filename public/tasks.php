<style>
    .scrum-board-container{
        font-family: Arial;
        color: #555;
        -webkit-user-select: none;
    }
    .board-title{
        background-color: #f1f1f1;
        padding: 5px 20px;
    }

    .flex{
        display: flex;
        flex-direction: row;
    }
    .scrum-board{
        flex: 1;
        padding:20px;
        border-right:1px solid #ddd;
        border-bottom:1px solid #ddd;
    }
    .scrum-board:first-child{
        flex: 1;
        padding:20px;
        border-left:1px solid #ddd;
    }

    .scrum-task{
        position: relative;
        display: block;
        padding: 10px;
        border: 1px solid #dddddd;
        border-left: 5px solid black;
        margin-bottom: 10px;
        border-radius: 5px;
        background-color: #f1f1f1;
        cursor: all-scroll;
    }

    .scrum-task.over {
        border-top: 2px solid red;
    }

    .scrum-task>span{
        color:#333;
        font-weight: bold;
    }

    .scrum-task-description:not(:empty) {
        margin-top: 10px;
    }

    .scrum-task-date:not(:empty) {
        margin-top: 10px;
        display: inline-block;
    }
    .scrum-task-assignee:not(:empty) {
        text-align:right;
    }

    .scrum-task-assignee > .assignee:not(:empty) {
        font-size: 12px;
        font-weight: 700;
        text-align: center;
        height: 28px;
        line-height: 28px;
        width: 28px;
        background-color: #dfe3e6;
        border-radius: 25em;
        color: #17394d;
        display: inline-block;
        -webkit-user-select: none;
    }

    .scrum-board-column{
        min-height: 200px;
        padding: 10px;
        height:100%;
    }
</style>

<main style="margin-top: 58px">
<div class="container pt-4">
    <?php  include '../src/inc/header.php' ?>
    <div class="scrum-board-container">
        <div class="board-title">
            <h1>Kanban Board</h1>
        </div>

        <div class="flex">
            <div class="scrum-board backlog">
                <h2>To do</h2>
                <div class="scrum-board-column" ondrop="drop(event)" ondragover="dragover(event)" id="backlog">
                    <div class="scrum-task overflow" draggable="true" ondragstart="dragstart(event)" id="123">
                        <span>Create Migration plan 1</span>
                        <div class="scrum-task-description">A description of the task will be here</div>
                        <div class="scrum-task-date badge badge-danger">Due 20/04/2019</div>
                    </div>

                    <div class="scrum-task overflow" draggable="true" ondragstart="dragstart(event)" id="89">
                        <span>Create Migration plan 2</span>

                        <div class="scrum-task-description">A description of the task will be here</div>
                        <div class="scrum-task-date badge badge-danger">Due 20/04/2019</div>

                    </div>
                </div>
            </div>

            <div class="scrum-board in-progress">
                <h2>In progress</h2>
                <div class="scrum-board-column" ondrop="drop(event)" ondragover="dragover(event)" id="in-progress">
                    <div class="scrum-task overflow" draggable="true" ondragstart="dragstart(event)" id="423">
                        <span>Create Migration plan 3</span>
                        <div class="scrum-task-description">A description of the task will be here</div>
                        <div class="scrum-task-date badge badge-danger">Due 20/04/2019</div>
                    </div>
                </div>
            </div>
            <div class="scrum-board done">
                <h2>Done</h2>
                <div class="scrum-board-column" ondrop="drop(event)" ondragover="dragover(event)" id="done"></div>
            </div>
        </div>
</div>
</main>
</body>