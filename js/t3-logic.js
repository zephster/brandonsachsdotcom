/** 
 * t3 game logic
 * (c) 2013 brandon sachs
 */

var TicTacToe = function(canvas)
{
    this.current_game;
    this.winning_games;
    this.expected_player;
    this.game_over;
    this.$game_board; //the game board object itself (canvas)
    
    this.newGame(canvas);
};

TicTacToe.prototype.help = function()
{
    var help_msg;
    
    help_msg = 't3 available commands:\n';
    help_msg += '\t.help() \t\t\t\t this text\n';
    help_msg += '\t.viewGameBoard() \t\t view current game board\n';
    help_msg += '\t.play(player, square) \t make a move. player is x or o, squares are numbered 1-9 starting from the top left. displays game board afterwards\n';
    help_msg += '\t.newGame() \t\t\t\t starts a new game, x goes first\n';
    help_msg += '\t.parrot()\n';
    
    return help_msg;
};

TicTacToe.prototype.newGame = function(canvas)
{
    this.current_game    = [[0,0,0],[0,0,0],[0,0,0]];
    this.winning_games   = [[0,1,2],[3,4,5],[6,7,8],[0,3,6],[1,4,7],[2,5,8],[0,4,8],[2,4,6]];
    this.expected_player = 'x';
    this.game_over       = false;
    
    if (canvas != undefined)
    {
        this.$game_board = new TicTacToeBoard(this, canvas);
    }
    
    console.log('t3 by brandon sachs - new game started! game.help() for commands. player: x');
};


TicTacToe.prototype.expectedPlayer = function()
{
    return this.expected_player;
};


TicTacToe.prototype.viewGameBoard = function()
{
    var grid = '\n';
    for (var row in this.current_game)
    {
        var left   = (this.current_game[row][0] == 0) ? " " : this.current_game[row][0],
            middle = (this.current_game[row][1] == 0) ? " " : this.current_game[row][1],
            right  = (this.current_game[row][2] == 0) ? " " : this.current_game[row][2];
        
        grid += left + ' | ' + middle + ' | ' + right;
        
        if (row <= 1){
            grid += '\n';
            grid += '----------';
        }
        
        grid += '\n';
    }
    
    return grid;
};


TicTacToe.prototype.play = function(player, square)
{
    var square = parseInt(square-1),
        status = {},
        move;
    
    status.won = false;
    
    //check stuff
    if (this.game_over){
        status.won = true;
        status.message = "this game is done! use .newGame() to start a new game";
        return status.message; //personal site returns just the message. when using with t3-canvas, return the whole object
    }
    
    if (!player){
        status.message = "missing player";
        return status.message; //personal site returns just the message. when using with t3-canvas, return the whole object
    }
    
    if (isNaN(square)){
        status.message = "missing or invalid square";
        return status.message; //personal site returns just the message. when using with t3-canvas, return the whole object
    }
    
    if (player != this.expected_player){
        status.message = "it's not your turn";
        return status.message; //personal site returns just the message. when using with t3-canvas, return the whole object
    }
    
    //actually make the move
    if (!this._isValidMove(player, square)){
        status.message = "invalid move";
        return status.message; //personal site returns just the message. when using with t3-canvas, return the whole object
    }
    
    //did it win?
    move = this._isWinningMove(player);
    if (move === false)
    {
        this.expected_player = (player == 'x') ? 'o' : 'x';
        return this.viewGameBoard() + "next turn: " + this.expected_player;
    }
    else
    {
        status.won  = true;
        status.move = move;
        return this.viewGameBoard() + this.expected_player + " wins!\nuse .newGame() to start a new game";
    }
    
    //for my personal site, i'm overriding this to return the game board view and the next expected player. when using with t3-canvas, return status
    //return status;
};


TicTacToe.prototype._isValidMove = function(player, square)
{
    //is this a valid move?
    if (square >= 0 && square <= 8)
    {
        if (square <= 2)
        {
            if (this.current_game[0][square] !== 0){
                return false;
            }
            this.current_game[0][square] = player;
        }
        else if (square >= 3 && square <= 5)
        {
            if (this.current_game[1][square-3] !== 0){
                return false;
            }
            this.current_game[1][square-3] = player;
        }
        else if (square >= 6)
        {
            if (this.current_game[2][square-6] !== 0){
                return false;
            }
            this.current_game[2][square-6] = player;
        }
    }
    else
    {
        return false;
    }
    
    return true;
};

TicTacToe.prototype._isWinningMove = function(player)
{
    var squareCount  = 0,
        moves        = [],
        winning_move = false;
    
    //list currently plotted moves for player
    for (var row in this.current_game)
    {
        for (var square in this.current_game[row])
        {
            if (this.current_game[row][square] == player)
            {
                moves.push(squareCount);
            }
            
            squareCount++;
        }
    }
    
    //loop through winning game positions, see if we've got a complete set
    for (var winning_moves in this.winning_games)
    {
        var win_combo     = this.winning_games[winning_moves],
            current_combo = $.grep(win_combo, function(square_pos)
            {
                return $.inArray(square_pos, moves) < 0; // return bool instead of pos
            });
        
        if (current_combo.length == 0)
        {
            //winning_move   = true;
            winning_move   = winning_moves; //index of the win combo in this.winning_games
            this.game_over = true;
        }
    }
    
    return winning_move;
};


TicTacToe.prototype.parrot = function()
{
    //i didn't make this, and i really wish i could find where i got it so i can credit the author properly, but unfortunately i can't :(
    console.log("%c      %c      %c                                                                                        \n%c    %c  %c    %c  %c  %c                                                                                      \n%c    %c  %c    %c  %c  %c                                                                                      \n%c  %c    %c    %c  %c  %c                    %c                                             \n%c  %c  %c  %c    %c  %c  %c    %c              %c  %c                        %c           \n%c  %c  %c  %c    %c  %c  %c    %c              %c  %c  %c  %c                  %c  %c    %c                                      \n%c  %c  %c  %c      %c  %c    %c              %c  %c  %c                    %c  %c    %c  %c                                    \n%c  %c  %c      %c  %c  %c                  %c  %c  %c                      %c    %c  %c                                    \n%c  %c  %c      %c  %c  %c                  %c  %c  %c                      %c    %c  %c                    \n%c    %c        %c      %c      %c  %c      %c  %c                        %c    %c  %c                                    \n%c          %c  %c                    %c  %c                            %c  %c         \n%c          %c  %c      %c  %c              %c  %c  %c                        %c  %c                  \n%c          %c  %c      %c  %c              %c  %c  %c                        %c  %c                                    \n%c          %c  %c      %c  %c  %c                                        %c  %c        \n%c          %c  %c      %c  %c  %c  %c                              %c  %c      %c  %c     \n%c          %c  %c      %c  %c  %c                              %c  %c  %c  %c    %c  %c           \n%c          %c  %c      %c  %c                  %c                    %c    %c  %c                                    \n%c          %c  %c        %c              %c    %c                  %c      %c                                      \n%c          %c  %c        %c              %c    %c                  %c      %c                                      \n%c          %c  %c                    %c  %c  %c  %c    %c                                                          \n%c      %c    %c  %c        %c  %c            %c  %c  %c    %c                                                          \n%c      %c    %c            %c  %c        %c  %c    %c                \n%c    %c  %c    %c  %c  %c          %c  %c      %c      %c                          \n%c    %c  %c      %c  %c    %c      %c  %c        %c  %c  %c    %c                                                          \n%c    %c  %c      %c  %c    %c      %c  %c        %c  %c  %c    %c                                                          \n%c  %c    %c            %c  %c    %c  %c        %c  %c  %c    %c                                                          \n%c  %c  %c  %c    %c          %c    %c        %c  %c  %c  %c                                                        \n%c  %c  %c  %c    %c  %c                  %c      %c                                                                \n%c  %c  %c  %c    %c  %c                  %c      %c                                                                \n%c    %c  %c    %c  %c                  %c                                                                      ",
'background: rgb(255,255,255)',
'background: rgb(67,52,77)',
'background: rgb(255,255,255)',
'background: rgb(255,255,255)',
'background: rgb(67,52,77)',
'background: rgb(16,237,254)',
'background: rgb(0,144,220)',
'background: rgb(67,52,77)',
'background: rgb(255,255,255)',
'background: rgb(255,255,255)',
'background: rgb(67,52,77)',
'background: rgb(16,237,254)',
'background: rgb(0,144,220)',
'background: rgb(67,52,77)',
'background: rgb(255,255,255)',
'background: rgb(255,255,255)',
'background: rgb(67,52,77)',
'background: rgb(53,98,174)',
'background: rgb(16,237,254)',
'background: rgb(0,144,220)',
'background: rgb(67,52,77)',
'background: rgb(255,255,255)',
'background: rgb(67,52,77)',
'background: rgb(41,188,242)',
'background: rgb(16,237,254)',
'background: rgb(41,188,242)',
'background: rgb(0,144,220)',
'background: rgb(41,188,242)',
'background: rgb(0,144,220)',
'background: rgb(16,237,254)',
'background: rgb(0,144,220)',
'background: rgb(121,58,101)',
'background: rgb(255,255,255)',
'background: rgb(67,52,77)',
'background: rgb(0,144,220)',
'background: rgb(41,188,242)',
'background: rgb(16,237,254)',
'background: rgb(41,188,242)',
'background: rgb(0,144,220)',
'background: rgb(41,188,242)',
'background: rgb(16,237,254)',
'background: rgb(41,188,242)',
'background: rgb(180,55,105)',
'background: rgb(255,158,19)',
'background: rgb(255,255,35)',
'background: rgb(255,207,27)',
'background: rgb(121,58,101)',
'background: rgb(255,255,255)',
'background: rgb(255,255,255)',
'background: rgb(67,52,77)',
'background: rgb(53,98,174)',
'background: rgb(0,144,220)',
'background: rgb(67,52,77)',
'background: rgb(16,237,254)',
'background: rgb(159,248,254)',
'background: rgb(0,144,220)',
'background: rgb(255,158,19)',
'background: rgb(255,255,35)',
'background: rgb(255,255,255)',
'background: rgb(255,207,27)',
'background: rgb(121,58,101)',
'background: rgb(255,255,255)',
'background: rgb(255,255,255)',
'background: rgb(67,52,77)',
'background: rgb(0,144,220)',
'background: rgb(67,52,77)',
'background: rgb(53,98,174)',
'background: rgb(0,144,220)',
'background: rgb(121,58,101)',
'background: rgb(255,207,27)',
'background: rgb(255,255,255)',
'background: rgb(255,255,35)',
'background: rgb(121,58,101)',
'background: rgb(255,255,255)',
'background: rgb(255,255,255)',
'background: rgb(67,52,77)',
'background: rgb(0,144,220)',
'background: rgb(67,52,77)',
'background: rgb(53,98,174)',
'background: rgb(0,144,220)',
'background: rgb(121,58,101)',
'background: rgb(255,207,27)',
'background: rgb(255,255,255)',
'background: rgb(255,255,35)',
'background: rgb(121,58,101)',
'background: rgb(255,255,255)',
'background: rgb(255,255,255)',
'background: rgb(67,52,77)',
'background: rgb(0,144,220)',
'background: rgb(67,52,77)',
'background: rgb(53,98,174)',
'background: rgb(0,144,220)',
'background: rgb(67,52,77)',
'background: rgb(255,158,19)',
'background: rgb(255,207,27)',
'background: rgb(121,58,101)',
'background: rgb(255,255,255)',
'background: rgb(255,255,255)',
'background: rgb(67,52,77)',
'background: rgb(0,144,220)',
'background: rgb(67,52,77)',
'background: rgb(255,158,19)',
'background: rgb(121,58,101)',
'background: rgb(255,255,255)',
'background: rgb(255,255,255)',
'background: rgb(67,52,77)',
'background: rgb(0,144,220)',
'background: rgb(53,98,174)',
'background: rgb(67,52,77)',
'background: rgb(180,55,105)',
'background: rgb(242,95,20)',
'background: rgb(255,158,19)',
'background: rgb(121,58,101)',
'background: rgb(255,255,255)',
'background: rgb(255,255,255)',
'background: rgb(67,52,77)',
'background: rgb(0,144,220)',
'background: rgb(53,98,174)',
'background: rgb(67,52,77)',
'background: rgb(180,55,105)',
'background: rgb(242,95,20)',
'background: rgb(255,158,19)',
'background: rgb(121,58,101)',
'background: rgb(255,255,255)',
'background: rgb(255,255,255)',
'background: rgb(67,52,77)',
'background: rgb(0,144,220)',
'background: rgb(67,52,77)',
'background: rgb(242,95,20)',
'background: rgb(255,158,19)',
'background: rgb(121,58,101)',
'background: rgb(255,255,255)',
'background: rgb(255,255,255)',
'background: rgb(67,52,77)',
'background: rgb(0,144,220)',
'background: rgb(67,52,77)',
'background: rgb(255,158,19)',
'background: rgb(180,55,105)',
'background: rgb(121,58,101)',
'background: rgb(242,95,20)',
'background: rgb(255,158,19)',
'background: rgb(121,58,101)',
'background: rgb(255,255,255)',
'background: rgb(255,255,255)',
'background: rgb(67,52,77)',
'background: rgb(0,144,220)',
'background: rgb(67,52,77)',
'background: rgb(242,95,20)',
'background: rgb(255,158,19)',
'background: rgb(242,95,20)',
'background: rgb(121,58,101)',
'background: rgb(242,95,20)',
'background: rgb(255,158,19)',
'background: rgb(121,58,101)',
'background: rgb(255,255,255)',
'background: rgb(255,255,255)',
'background: rgb(67,52,77)',
'background: rgb(0,144,220)',
'background: rgb(53,98,174)',
'background: rgb(67,52,77)',
'background: rgb(121,58,101)',
'background: rgb(242,95,20)',
'background: rgb(121,58,101)',
'background: rgb(255,255,255)',
'background: rgb(255,255,255)',
'background: rgb(67,52,77)',
'background: rgb(0,144,220)',
'background: rgb(53,98,174)',
'background: rgb(67,52,77)',
'background: rgb(255,255,255)',
'background: rgb(121,58,101)',
'background: rgb(255,255,255)',
'background: rgb(255,255,255)',
'background: rgb(67,52,77)',
'background: rgb(0,144,220)',
'background: rgb(53,98,174)',
'background: rgb(67,52,77)',
'background: rgb(255,255,255)',
'background: rgb(121,58,101)',
'background: rgb(255,255,255)',
'background: rgb(255,255,255)',
'background: rgb(67,52,77)',
'background: rgb(0,144,220)',
'background: rgb(53,98,174)',
'background: rgb(67,52,77)',
'background: rgb(53,98,174)',
'background: rgb(67,52,77)',
'background: rgb(255,255,255)',
'background: rgb(255,255,255)',
'background: rgb(67,52,77)',
'background: rgb(53,98,174)',
'background: rgb(0,144,220)',
'background: rgb(53,98,174)',
'background: rgb(0,144,220)',
'background: rgb(67,52,77)',
'background: rgb(53,98,174)',
'background: rgb(67,52,77)',
'background: rgb(255,255,255)',
'background: rgb(255,255,255)',
'background: rgb(67,52,77)',
'background: rgb(0,144,220)',
'background: rgb(67,52,77)',
'background: rgb(0,144,220)',
'background: rgb(53,98,174)',
'background: rgb(67,52,77)',
'background: rgb(255,255,255)',
'background: rgb(255,255,255)',
'background: rgb(67,52,77)',
'background: rgb(53,98,174)',
'background: rgb(0,144,220)',
'background: rgb(53,98,174)',
'background: rgb(0,144,220)',
'background: rgb(67,52,77)',
'background: rgb(53,98,174)',
'background: rgb(67,52,77)',
'background: rgb(255,255,255)',
'background: rgb(255,255,255)',
'background: rgb(67,52,77)',
'background: rgb(53,98,174)',
'background: rgb(0,144,220)',
'background: rgb(67,52,77)',
'background: rgb(0,144,220)',
'background: rgb(67,52,77)',
'background: rgb(53,98,174)',
'background: rgb(67,52,77)',
'background: rgb(242,95,20)',
'background: rgb(67,52,77)',
'background: rgb(255,255,255)',
'background: rgb(255,255,255)',
'background: rgb(67,52,77)',
'background: rgb(53,98,174)',
'background: rgb(0,144,220)',
'background: rgb(67,52,77)',
'background: rgb(0,144,220)',
'background: rgb(67,52,77)',
'background: rgb(53,98,174)',
'background: rgb(67,52,77)',
'background: rgb(242,95,20)',
'background: rgb(67,52,77)',
'background: rgb(255,255,255)',
'background: rgb(255,255,255)',
'background: rgb(67,52,77)',
'background: rgb(53,98,174)',
'background: rgb(67,52,77)',
'background: rgb(0,144,220)',
'background: rgb(67,52,77)',
'background: rgb(53,98,174)',
'background: rgb(67,52,77)',
'background: rgb(180,55,105)',
'background: rgb(67,52,77)',
'background: rgb(255,255,255)',
'background: rgb(255,255,255)',
'background: rgb(67,52,77)',
'background: rgb(255,158,19)',
'background: rgb(67,52,77)',
'background: rgb(53,98,174)',
'background: rgb(67,52,77)',
'background: rgb(53,98,174)',
'background: rgb(67,52,77)',
'background: rgb(180,55,105)',
'background: rgb(67,52,77)',
'background: rgb(255,255,255)',
'background: rgb(255,255,255)',
'background: rgb(67,52,77)',
'background: rgb(242,95,20)',
'background: rgb(255,158,19)',
'background: rgb(67,52,77)',
'background: rgb(53,98,174)',
'background: rgb(67,52,77)',
'background: rgb(255,255,255)',
'background: rgb(255,255,255)',
'background: rgb(67,52,77)',
'background: rgb(242,95,20)',
'background: rgb(255,158,19)',
'background: rgb(67,52,77)',
'background: rgb(53,98,174)',
'background: rgb(67,52,77)',
'background: rgb(255,255,255)',
'background: rgb(255,255,255)',
'background: rgb(67,52,77)',
'background: rgb(242,95,20)',
'background: rgb(255,158,19)',
'background: rgb(67,52,77)',
'background: rgb(255,255,255)');
return "squawk!";
};
