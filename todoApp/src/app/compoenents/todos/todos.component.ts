import { Component, OnInit } from '@angular/core';
import { DataService } from 'src/app/service/data.service';
import { Todo } from 'src/app/todo';



@Component({
  selector: 'app-todos',
  templateUrl: './todos.component.html',
  styleUrls: ['./todos.component.css']
})
export class TodosComponent implements OnInit {
  todos:any;
  todo = new Todo();

  constructor(private dataService:DataService) { }

  ngOnInit(): void {
    this.getTodos();
  }

  getTodos(){
    this.dataService.getData().subscribe(res =>{
      this.todos =res;
    });
  }
  insertData(){
  this.dataService.insertData(this.todo).subscribe(res=>{
    this.getTodos();
  });
  }
  deleteData(id:any){
this.dataService.deleteData(id).subscribe(res =>{
  this.getTodos();
});
  }

}
