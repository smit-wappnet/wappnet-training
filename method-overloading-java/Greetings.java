public class Greetings
{
    public void Greet(String name)
    {
        System.out.println("Welcome "+name);
        System.out.println("We Welcome you to our Company Wappnet Systems\n");
    }
    public void Greet(String[] names)
    {
        System.out.print("Welcome");
        for(int i=0; i<names.length; i++)
        {
            System.out.print((i>0)?",":"");
            System.out.print(" "+names[i]);
        }
        System.out.println("\nWe Welcome all of you to our Company Wappnet Systems\n");
    }
}