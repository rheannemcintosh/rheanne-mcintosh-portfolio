import { Role } from './Role';

export interface Employer {
    id: number;
    name: string;
    start_date: string;
    end_date?: string;  // Optional end_date
    is_current_employer: boolean;
    description?: string;  // Optional description
    is_default_open: boolean;
    roles: Role[];
}
