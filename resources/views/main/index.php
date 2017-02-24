<div class="page-header">
    <h1 style="margin-left: 40px">Todo list</h1>
</div>


<div class="col-md-12"></div>
<div class="col-md-12">
    <div class="col-md-3">
        <div class="list-group">
            <a href="#" class="list-group-item" *ngFor="let item of items" (click)="changeTask(item)">
                <span class="badge">{{item.tasks.length}}</span> {{item.name}}</a>
        </div>
    </div>

    <div class="col-md-9"><input type="hidden" [(ngModel)]="tasks">
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading"><h3>{{title}}</h3></div>
            <div class="panel-body">
                <input type="text" placeholder="@#@#@#@@#@" [(ngModel)]="newTaskText"><input type="button" value="ADD" (click)="createNewTask()">
            </div>
            <table class="table">
                <tr *ngFor="let task of tasks">
                    <td><input *ngIf="!task.is_checked" class="form-control" type="checkbox"  (change)="changeCheck(task)">
                        <input *ngIf="task.is_checked" class="form-control" type="checkbox" (change)="changeCheck(task)" checked>
                    </td>
                    <td>
                        <h4 *ngIf="!task.is_checked">{{task.taskText}}</h4>
                        <h4 *ngIf="task.is_checked" style="text-decoration: line-through">{{task.taskText}}</h4>
                    </td>
                    <td style=" vertical-align: middle; font-size: 14px">
                        <button (click)="removeTask(task)">
                            <span class="glyphicon glyphicon-trash"></span>
                        </button>
                    </td>

                </tr>
            </table>
        </div>
        <div></div>
    </div>
</div>