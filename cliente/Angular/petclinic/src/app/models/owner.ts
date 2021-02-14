import { Pet } from "./pet";
import { OwnerService } from '../services/owner.service';

export class Owner {
    id: Number;
    firstName: String;
    lastName: String;
    address: String;
    city: String;
    pets: Pet[];
    telephone: Number
}
