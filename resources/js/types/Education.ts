import { Degree } from './Degree';

export interface Education {
    id: number;
    institution: string;
    start_date: string;
    end_date?: string;  // Optional end_date
    is_current_education: boolean;
    degree?: Degree;
    // start_date: string;
    // end_date?: string;  // Optional end_date
    // is_current_employer: boolean;
    description?: string;  // Optional description
    is_default_open: boolean;
    // roles: Role[];
}
