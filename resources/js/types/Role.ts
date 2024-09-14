import { Responsibility } from './Responsibility';

export interface Role {
    id: number;
    title: string;
    responsibilities: Responsibility[];
}
