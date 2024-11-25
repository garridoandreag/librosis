<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Autor;
use Illuminate\Support\Facades\DB;


class AutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('autor')->insert([
        //     'nombre' => 'Lois Lowry',
        //     'fecha_creacion' => \Carbon\Carbon::now(),
        //     'fecha_modificacion' => \Carbon\Carbon::now(),
        // ]);

                // DB::table('autor')->insert([
        //     'nombre' => 'Jaideva Goswami',
        //     'fecha_creacion' => \Carbon\Carbon::now(),
        //     'fecha_modificacion' => \Carbon\Carbon::now(),
        // ]);

                // DB::table('autor')->insert([
        //     'nombre' => 'John Foreman',
        //     'fecha_creacion' => \Carbon\Carbon::now(),
        //     'fecha_modificacion' => \Carbon\Carbon::now(),
        // ]);
        
        DB::table('autor')->insert([
            'nombre' => 'Stephen Hawking',
            'fecha_creacion' => \Carbon\Carbon::now(),
            'fecha_modificacion' => \Carbon\Carbon::now(),
        ]);

        DB::table('autor')->insert([ 'nombre' => 'Stephen Dubner',
            'fecha_creacion' => \Carbon\Carbon::now(),
            'fecha_modificacion' => \Carbon\Carbon::now(),
        ]);
        DB::table('autor')->insert([ 'nombre' => 'Edward Said',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Vladimir Vapnik',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'VP Menon',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Leonard Mlodinow',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Frank Shih',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Maria Konnikova',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Gutierrez Sebastian',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Kurt Vonnegut',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Cedric Villani',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Gerald Sussman',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Abraham Eraly',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Frank Kafka',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'John Pratt',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Robert Nisbet',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'H.G. Wells',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Werner Heisenberg',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Andy Oram',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Terence Tao',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Drew Conway',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Nate Silver',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Wes McKinney',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Thomas Cormen',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Siddhartha Deb',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Albert Camus',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Arthur Conan Doyle',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Adam Smith',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Ken Follett',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Adolf Hitler',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Fritjof Capra',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Richard Feynman',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Ernest Hemingway',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Frederick Forsyth',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Jeffery Archer',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Randy Pausch',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Ayn Rand',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Michael Crichton',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'John Steinbeck',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Edgar Allen Poe',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Will Durant',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'PL Deshpande',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'John Grisham',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'V.S.  Naipaul',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Joseph Heller',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => ' BBC',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Bob Dylan',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Madan Gupta',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Alfred Stonier',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'W.H. Greene',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Gary Bradsky',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Andrew Tanenbaum',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'David Forsyth',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Schilling Taub',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Yashwant Kanetkar',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Jonathan Stroud',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Fyodor Dostoevsky',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Dan Brown',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Amartya Sen',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Amitav Ghosh',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Lorraine Hansberry',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Bob Woodward',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Kuldip Nayar',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Sunita Deshpande',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'William Dalrymple',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => ' Various',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Sanjay Garg',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'VP Kale',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Shashi Tharoor',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Dominique Lapierre',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Bertrand Russell',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Sam Harris',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Earle Stanley Gardner',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Peter Drucker',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'David Bodanis',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Victor Hugo',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Richard Gordon',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'George Orwell',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Lee Iacoca',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'William S. Maugham',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Robert Pirsig',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Robert Fisk',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Amir Aczel',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Samuel Huntington',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Richard Bach',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => ' Braithwaite',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'VS Naipaul',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Jawaharlal Nehru',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Gerald Durrell',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Simon Singh',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Hart Duda',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Thomas Friedman',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Keith Devlin',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'James Gleick',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Joy Thomas',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Muhammad Rashid',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Ned Mohan',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Simon Haykin',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Alex Rutherford',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Michael Baz-Zohar',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Jim Corbett',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Jules Verne',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'PL Deshpande',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Eric Raymond',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Sergio Franco',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Allen Downey',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Morris West',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Phillip Janert',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Carl Sagan',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'ET Bell',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Richard Dawkins',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Sudhanshu Ranjan',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => ' Kautiyla',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => ' Palkhivala',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => ' Sorabjee',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Hussain Zaidi',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Peter Ackroyd',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => ' Nariman',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Jean Sassoon',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Peter Dickinson',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => ' Machiavelli',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Aldous Huxley',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'JK Rowling',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Steig Larsson',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Steve Eddins',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('autor')->insert([ 'nombre' => 'Charles Dickens',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);




    }
}
