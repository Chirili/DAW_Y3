import { Component, OnInit } from '@angular/core';
import {Router, ActivatedRoute} from '@angular/router';
import {FormControl, FormGroup} from '@angular/forms';
import { Owner } from '../../models/owner';
import { OwnerService } from '../../services/owner.service';

@Component({
  selector: 'app-form-owner',
  templateUrl: './form-owner.component.html',
  styleUrls: ['./form-owner.component.scss']
})
export class FormOwnerComponent implements OnInit {
  public owner: Owner;
  constructor(private params: ActivatedRoute, private route: Router, private ownerService: OwnerService) {
      
   }
  onSubmit(formValues: Owner){
    this.ownerService.addOwner(formValues).subscribe(data=>{
      console.log(data);
      this.route.navigate(['/owners']);
    }, error => console.log(error));
  }
  ngOnInit(): void {
    this.owner = <Owner>{};
  }

}
